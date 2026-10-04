<?php
declare(strict_types=1);
namespace Kadad\Auth;
final class Security {
 public static function randomToken(int $bytes=32): string { return rtrim(strtr(base64_encode(random_bytes($bytes)), '+/', '-_'), '='); }
 public static function hashToken(string $token): string { return hash('sha256',$token); }
 public static function base64UrlEncode(string $data): string { return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); }
 public static function verifyPkce(string $verifier,string $challenge,string $method): bool {
  return $method==='S256' && hash_equals($challenge,self::base64UrlEncode(hash('sha256',$verifier,true)));
 }
 public static function html(string $v): string { return htmlspecialchars($v,ENT_QUOTES|ENT_SUBSTITUTE,'UTF-8'); }
 public static function redirect(string $url): never { header('Location: '.$url,true,302); exit; }
 public static function json(array $data,int $status=200): never { http_response_code($status); header('Content-Type: application/json; charset=utf-8'); header('Cache-Control: no-store'); echo json_encode($data,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES); exit; }
}
