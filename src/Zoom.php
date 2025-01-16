<?php

namespace Conference\Zoom;

use Conference\ConferenceInterface;
use Conference\ServiceInterface;
use DateTimeInterface;
use Firebase\JWT\JWT;

final class Zoom implements ServiceInterface
{
    private function computeZoomAccessToken(string $apiKey, string $apiSecret, int $expirationInSeconds = 60*60): string
    {
        return JWT::encode(['iss' => $apiKey, 'exp' => time() + $expirationInSeconds], $apiSecret);
    }

    public function getKey(): string
    {
    }

    public function schedule(DateTimeInterface $fromDate, DateTimeInterface $toDate): ConferenceInterface
    {
    }

    public function cancel(ConferenceInterface $conference): void
    {
    }

    public function reschedule(ConferenceInterface $conference, DateTimeInterface $fromDate, DateTimeInterface $toDate): void
    {
    }
}
