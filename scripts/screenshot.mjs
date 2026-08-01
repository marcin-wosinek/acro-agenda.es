import { chromium } from '@playwright/test';
import { mkdir } from 'node:fs/promises';
import { resolve } from 'node:path';

const pageUrl = process.env.PAGE_URL || 'http://localhost:9788';
const outputPath = resolve('artifacts', 'front-page.png');

await mkdir(resolve('artifacts'), { recursive: true });

const browser = await chromium.launch();
const page = await browser.newPage({ viewport: { width: 1440, height: 1000 } });

try {
  await page.goto(pageUrl, { waitUntil: 'networkidle' });
  await page.screenshot({ path: outputPath, fullPage: true });
  console.log(`Screenshot saved to ${outputPath}`);
} finally {
  await browser.close();
}
