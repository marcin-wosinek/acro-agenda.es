const { defineConfig, devices } = require('@playwright/test');

module.exports = defineConfig({
  testDir: './tests',
  timeout: 30_000,
  use: {
    baseURL: process.env.PAGE_URL || 'http://localhost:9788',
    ...devices['Desktop Chrome'],
  },
});
