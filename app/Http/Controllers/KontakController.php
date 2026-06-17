<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\KontakMail;

class KontakController extends Controller
{
    /**
     * menampilkan kontak page
     */
    public function index()
    {
        return view('pages.kontak');
    }

    /**
     * Send contact form email
     */
    public function kirim(Request $request)
    {
        // Validate incoming request
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'telepon' => 'nullable|string|max:20',
            'subjek' => 'required|string|max:255',
            'pesan' => 'required|string',
        ]);

        try {
            Log::info('Attempting to send email', [
                'to' => env('MAIL_TO_ADDRESS'),
                'from' => $validated['email'],
                'subject' => '[Kontak Website] ' . $validated['subjek']
            ]);

            // Send email using Mailable
            Mail::to(env('MAIL_TO_ADDRESS'))
                ->send(new KontakMail($validated));

            Log::info('Email sent successfully', ['email' => $validated['email']]);
            return redirect()->back()->with('success', 'Pesan berhasil dikirim! Kami akan segera merespons.');
        } catch (\Exception $e) {
            Log::error('Email sending failed', [
                'error' => $e->getMessage(),
                'code' => $e->getCode(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()
                ->withInput()
                ->with('error', 'Gagal mengirim pesan. Error: ' . $e->getMessage());
        }
    }
}
