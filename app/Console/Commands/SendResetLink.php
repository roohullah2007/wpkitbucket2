<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Password;

class SendResetLink extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:send-reset-link {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a password reset link to the given email address';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $email = $this->argument('email');
    
        // Check if the email exists in the users table
        $user = \App\Models\User::where('email', $email)->first();
        if (!$user) {
            $this->error("No user found with this email address: {$email}");
            return 1;
        }
    
        // Send the password reset link
        $status = Password::sendResetLink(['email' => $email]);
    
        if ($status === Password::RESET_LINK_SENT) {
            $this->info("✅ Password reset link sent successfully to {$email}");
            return 0;
        }
    
        $this->error("❌ Failed to send reset link. Status: " . trans($status));
        return 1;
    }
    
}
