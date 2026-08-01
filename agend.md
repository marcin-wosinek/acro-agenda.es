# Screenshot verification

Use the repository screenshot helper whenever a visual change is made. It
opens the local wp-env site configured in `screenshot.config.cjs` (currently
`http://localhost:9788`) and saves images under the gitignored `artifacts/`
directory.

```sh
# Start the local WordPress environment when it is not already running.
npx wp-env start

# Desktop screenshot of the home page (1440 px wide).
npm run screenshot

# Desktop screenshot of a route.
npm run screenshot -- /publica-tu-evento

# Mobile screenshot of that route (375 px wide).
npm run screenshot -- /publica-tu-evento --mobile
```

Inspect the generated screenshot before declaring a visual change complete.
Check both desktop and mobile for overflow, clipped content, and unintended
layout changes. To target a different running environment temporarily, set
`PAGE_URL`; do not change `screenshot.config.cjs` unless the project's
wp-env port changes.
