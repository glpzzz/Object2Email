<?php

namespace Glpzzz\Object2Email;

use Symfony\Component\Mime\Email;

interface MailMessage
{

    public function getEmailReplyTo(): ?string;

    public function getEmailTo(): ?string;

    public function getEmailFrom(): ?string;

    public function getEmailBc(): ?string;

    public function getEmailBcc(): ?string;

    public function getEmailSubject(): ?string;

    public function getEmailHtmlOutput(): ?string;

    public function getEmailPlainTextOutput(): ?string;

    public function toEmail(): Email;

}
