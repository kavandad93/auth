# Kadad Auth

Central authentication and SSO service for Kadad.

## Planned clients

- kadad.ir (WordPress)
- wnat.ir (WordPress)
- class.kadad.ir (custom application)

## Authentication model

The service will support both:
- Local login on each client
- "Login with Kadad" through auth.kadad.ir

The SSO protocol is designed around OAuth 2.0 and OpenID Connect.

## Development

This repository contains the central identity service. Client integrations are kept separate from the identity provider.
