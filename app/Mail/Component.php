<?php
namespace App\Mail;

class Component
{
    public string $fromEmail;
    public string $fromName = '';
    public string $replyToEmail = '';
    public string $replyToName = '';
    public string $errorsToEmail = '';
    public string $errorsToName = '';
    public string $subject;
    public string $text;
    public string $html;
}
