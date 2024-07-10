# Chrome Third-party cookie deprecation test environment

this is a test environment to test the impact of the third-party cookie deprecation in Chrome.

How to run the test environment:

1. Clone the repository
2. Run the following command to start the server:
```bash
docker compose up -d
```

Add the following entry to your `/etc/hosts` file:
```
127.0.0.1        test-1st-party.com
127.0.0.1        app.test-1st-party.com
127.0.0.1        test-3rd-party.com
```

Open the browser and navigate to `https://test-1st-party.com/`

enable and disable the flag at: `chrome://flags/#test-third-party-cookie-phaseout`

check how the values are being stored in the session.

# License
MIT
