<?php

namespace App\Http\Controllers;

use App\Models\OtpCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ForgotPasswordController extends Controller
{
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Código enviado por email']);
        }

        $code = sprintf('%06d', random_int(0, 999999));
        $expires = now()->addMinutes(10);

        OtpCode::updateOrCreate(
            ['email' => $request->email],
            [
                'code' => $code,
                'expires_at' => $expires,
                'used' => false,
            ]
        );

        Mail::raw("Tu código de recuperación: {$code}\n\nEste código es válido por 10 minutos.", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Código de recuperación de contraseña');
        });

        return response()->json(['message' => 'Código enviado por email']);
    }

    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required|string|size:6',
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        $otp = OtpCode::where('email', $request->email)
            ->where('code', $request->code)
            ->where('expires_at', '>', now())
            ->where('used', false)
            ->first();

        if (!$otp) {
            throw ValidationException::withMessages([
                'code' => 'El código de recuperación no es válido o ha expirado',
            ]);
        }

        $user = User::where('email', $request->email)->firstOrFail();
        $user->password = Hash::make($request->password);
        $user->save();

        $otp->update(['used' => true]);

        return response()->json(['message' => 'Contraseña restablecida con éxito']);
    }
}
