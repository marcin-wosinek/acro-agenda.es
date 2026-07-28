<!-- Hallmark · pre-emit critique: P4 H4 E4 S5 R4 V4 · design-system proposal v2 (Hum), no page built yet -->

# Design — Acro Agenda (acro-agenda.es)

Design system record for the Acro Agenda block theme. `theme.json` is
canonical (WordPress reads it); this file is the narrative companion — the
why behind every token. Future design work reads this file first; amend it
intentionally, never drift from it silently.

**Status: LOCKED 2026-07-27 — palette, typography, spacing, shape and
motion stance approved by Marcin and persisted into `theme.json`. Pages
defer to this file; amend intentionally.**

Decision history:
- 2026-07-27 · v1 proposed single-accent terracotta (Coral register) under
  the then-current one-accent project rule.
- 2026-07-27 · Marcin removed the one-accent rule and asked for genuinely
  playful → v2, catalog **Hum** tuned to the brief. CLAUDE.md color rule
  amended the same day.
- 2026-07-27 · v2 LOCKED. Tokens persisted into `theme.json`; latin-subset
  variable woff2 for Plus Jakarta Sans (normal + italic) and JetBrains Mono
  committed to `acro-agenda/assets/fonts/`.
- 2026-07-28 · Persistence gap-check vs this file: enabled
  `settings.typography.fluid` (per-size fluid was silently ignored without
  it), added `--wp--custom--color--focus`, put the push-button edge + cast
  shadow on the button element in `theme.json`; press physics + focus ring
  + reduced-motion collapse into `style.css` (preset vars only).

## Chrome

### Header — 2026-07-28

N1b three-section bar (Hallmark nav catalog), knobs: 3 links · no
dropdowns · always-solid, in-flow (frost-on-scroll needs JS; project is
JS-free). Files: `parts/header.html` → `patterns/header.php` +
header CSS in `style.css`.

- **Band** · base-2 (Papel 2) — the tinted band *is* the boundary; no
  border hairline, keeping the no-raw-values rule intact.
- **Wordmark** · `get_bloginfo( 'name' )` (2026-07-28 revision — the WP
  Settings → General site title, currently "Acro-Agenda", now IS the
  short name; `bloginfo` beats a hard-coded string so it still works on
  a fresh DB, matching the earlier concern), Plus Jakarta 800, md size.
  The character moment rides here: sol dot (`::after`, 0.32em) with the
  locked 4s 1→1.04→1 pulse. *Observation:* at dot size the 4% scale is
  near-imperceptible; amend the amplitude intentionally if it should
  read at rest.
- **Nav** · `core/navigation`, overlay below 600px (core-supplied JS,
  not custom). Region links Valencia · Cataluña · Madrid (label "Madrid"
  for page "Comunidad de Madrid"). Hover = cielo tint at 10%
  (`color-mix` on the preset), pill radius — cielo owns links/hover per
  the three-rule. `aria-current` page gets cielo-deep text.
- **CTA** · "Publica tu evento" push button (sol, the locked primary
  action) — rest state from `theme.json`, physics from `style.css`.
- **Mobile** · ≤30em the wordmark and CTA step down one font size and
  header padding tightens (`!important` overrides on the block's inline
  padding); verified no overflow and one-line CTA at 320/375/414/768.
- **Site-wide fix locked with this piece** · `html, body { overflow-x:
  clip }` — pre-existing content overflow (Fair Events calendar, 374px)
  was expanding the mobile initial containing block and pushing the nav
  overlay's close button off-screen. `clip`, not `hidden`.

Rejected: N7 brutal slab (genre-file default — square slab fights Hum's
rounded register); N5 floating pill (banned for playful in the genre
file); sticky positioning (viewport theft on the mobile-heavy audience;
revisit with real usage); `core/site-title` block (still avoided — its
markup isn't styleable to the same degree as the hand-built paragraph;
`bloginfo` gets the dynamism without giving up markup control).

### Footer — 2026-07-28

Ft5 Statement (Hallmark footer catalog), knobs: sentence ≤28ch ·
wordmark = none · rule = none. Files: `parts/footer.html` →
`patterns/footer.php` + footer CSS in `style.css`; registered in
`theme.json` `templateParts`.

- **Band** · base-2 (Papel 2) — bookends the header; same rule as there:
  the tinted band *is* the boundary, no hairlines anywhere in the piece
  (knob "rule above meta" deliberately none).
- **Statement** · «Nos vemos en la jam.» — 2xl fluid, weight 700,
  tracking −0.025em, line-height 1.1, max 28ch. Plain ink: a sol
  highlight under "jam" was rejected because sol owns primary action
  only (three-rule), and coral must stay free for each view's one pop
  moment (featured events on calendar pages).
- **Meta row** · flex, wrap, space-between. Left: `<nav>` of pill text
  links (Valencia · Cataluña · Madrid · Publica tu evento) sharing the
  header nav's vocabulary — cielo-deep text, cielo 10% hover tint, pill
  radius, sm padding for ≥44px targets; negative start margin realigns
  the first pill's text with the statement's left edge. Right:
  © `gmdate('Y')` + `bloginfo('name')`, ink at 72% via `color-mix`
  (ink-with-opacity rule, never a new grey).
- **«Publica tu evento»** rides as a text link, not a second push
  button — one push button per view; the header CTA owns it.
- **Mobile** · ≤30em inline padding tightens to sm (matches header);
  verified at 320/375: no horizontal scroll, links one line, 48.8px
  hit targets.

Rejected: Ft8 marquee scroll (playful genre default — an always-on
scrolling line is a second permanent motion moment; Hum-lite locks one
character moment per page, and it reads loud on a utility site); Ft3
index columns (no genuine sitemap; AI fingerprint); footer wordmark
(the copyright line already carries the name; a second dot would
duplicate the character mark); Instagram/newsletter links (no site-wide
handle or mechanism exists — the front page content carries a
Valencia-specific `@acro.agenda.valencia`; add social links here only
if a site-wide channel emerges).

## Brief

Community aggregator of acroyoga events (classes, jams, workshops,
festivals) across Spanish regions — Valencia, Cataluña, Madrid. Spanish
copy, volunteer/community tone, calendar-first. The one job: *a
practitioner finds what's on near them this week.*

- **Audience** · acroyoga practitioners in Spain, all levels; mobile-heavy.
- **Use case** · scan the weekly/monthly calendar, open an event; secondary:
  submit an event, subscribe (email / calendar feed / Instagram).
- **Tone** · playful, warm, alive — the room is sunny and someone smart is
  smiling. Vibrant, never childish; legibility still wins on calendar
  surfaces.

## System

- Genre · playful (vibrant end)
- Theme · catalog **Hum** — cream paper, multi-accent, rounded sans,
  press-down buttons. Adapted "Hum-lite" for a build-step-free block theme
  (CSS-only motion, no JS counters, no smooth-scroll library).
- Axes · light warm paper (cream, pear pull) / rounded-sans display /
  multi-accent (sol · cielo · coral)
- Macrostructure · *not yet picked* — decided per page when chrome/templates
  are built; calendar pages are content-led (Fair Event Plugins markup).

## Palette — "Jam al sol"

Hum's calibrated multi-accent set, named for the site: sun, sky, sunset —
a flyer against the Spanish sky. All oklch; neutrals carry the cream tint
(never flat grey, never #fff/#000).

```css
:root {
  --color-paper:      oklch(97% 0.012 95);  /* cream, slight pear pull          */
  --color-paper-2:    oklch(94% 0.016 95);  /* tinted band / card alt           */
  --color-paper-3:    oklch(91% 0.020 95);  /* deeper hover surface             */
  --color-ink:        oklch(20% 0.012 250); /* near-black, cool tilt            */
  --color-sol:        oklch(86% 0.18  95);  /* pear-yellow — PRIMARY ACTION     */
  --color-sol-deep:   oklch(72% 0.16  95);  /* button edge (press shadow)       */
  --color-cielo:      oklch(66% 0.18 235);  /* sky-cyan — links, hover tints,
                                               calendar "today"                 */
  --color-cielo-deep: oklch(46% 0.12 235);  /* link TEXT on paper — ≥4.5:1      */
  --color-coral:      oklch(66% 0.22  20);  /* coral — ONE pop moment per view  */
  --color-menta:      oklch(78% 0.14 150);  /* soft green — "gratis" tag,
                                               success states. Sparing.         */
  --color-lavanda:    oklch(74% 0.14 305);  /* festival/taller chips. Sparing.  */
  --color-focus:      oklch(46% 0.12 235);  /* focus rings, ≥3:1 on paper       */
}
```

**Each accent owns one role** (the three-rule):
1. **sol** = primary action only — "Publica tu evento", newsletter submit,
   the wordmark's character dot. 2. **cielo** = links, hover tints, the
   "today" column marker. 3. **coral** = the single high-energy moment per
   view (next-featured event, festival badge). Menta and lavanda are
   occasional chip tints — at most one of each per view.
- Event-type chips ride low-opacity accent tints (~8%, deepening to ~14% on
  hover): clase = cielo · jam = sol · taller = lavanda · festival = coral ·
  gratis = menta. Chips are small; this never puts an accent over more than
  a few percent of the viewport.
- Accents never blend in gradients. Text on accent fills is `--color-ink`,
  never white. Ink is modified with opacity (body ~90%), not new hexes.

## Typography

Two families, self-hosted latin-subset variable woff2 in
`acro-agenda/assets/fonts/`, registered via `fontFace` in `theme.json` — no
runtime font CDN request. **No serif anywhere; headings always roman.**

- **Display + body · Plus Jakarta Sans** (Google Fonts, OFL, variable
  400–800) — rounded humanist sans, friendly terminals; Hum's canonical
  face. Display weight 600–700, tracking −0.025em; body 400 with 500
  emphasis; wordmark 800.
- **Mono outlier · JetBrains Mono** (OFL, variable) — uppercase labels and
  all dates/times/ordinals (`MAR · 19:00`), `tabular-nums`. Two slots only:
  calendar meta + tags/labels. Never body copy.

Scale: major third (1.25) from 16px base — `sm 0.8rem · base 1rem ·
md 1.25 · lg 1.56 · xl 1.95 · 2xl 2.44 · display clamp(2.75rem, 5vw + 1rem,
4.5rem)`, `fluid: true` on the top steps in `theme.json`. Body line-height
1.55; display 1.1; measure ≤65ch. Minimum body size 16px.

## Spacing

4-pt scale, named steps only (for `settings.spacing.spacingSizes`):
`2xs 4 · xs 8 · sm 12 · md 16 · lg 24 · xl 40 · 2xl 64 · 3xl 96` (px).
Sections breathe at `xl`–`2xl`; calendar cells stay dense at `xs`–`sm`.

## Shape & CTA voice

- Radii · cards 20px · inputs 12px · pills 999px. **No square corners
  anywhere** — this is the rounded theme.
- Primary CTA · Hum push button: sol fill, ink text, pill radius, solid
  color edge `0 4px 0 0 var(--color-sol-deep)` + soft cast shadow; lifts
  2px on hover, **presses down 3px on :active** (the press is the
  feedback). One push button per primary moment.
- Secondary · soft (flat fill, soft shadow). Tertiary · 1px outline.
  Never stack multiple push buttons.
- Cards · soft lifting shadow `0 12px 32px -16px` ink/12%, lift 4px on
  hover with accent tint deepening.

## Motion stance — Hum-lite (CSS-only)

Playful but build-step-free: no JS, no Lenis, no counters.
- Button press physics (hover lift / active press) — pure CSS.
- Card hover-lift + tint deepen, 220ms.
- **One character moment**: the wordmark's sol-yellow dot pulses gently at
  rest (4s scale 1→1.04→1), CSS keyframes only.
- Easings: `--ease-snap cubic-bezier(0.22, 1, 0.36, 1)` for reveals,
  `cubic-bezier(0.2, 0.7, 0.3, 1)` on buttons.
- `prefers-reduced-motion`: transforms collapse to color transitions; the
  character dot holds still.

## Rejected alternatives

- 2026-07-27 · **v1 single-accent terracotta (Coral register)** — proposed
  under the old one-accent rule; superseded when Marcin removed the rule
  and asked for genuinely playful.
- **Full Hum motion stack** (Lenis smooth scroll, JS tick-up counters,
  star-burst on click) — rejected: requires JS/build tooling this project
  deliberately avoids. Revisit only if custom JS ever becomes unavoidable.
- **Bricolage Grotesque + Satoshi pairing** (v1) — friendly but not the
  rounded-sans register; Hum's identity lives in Plus Jakarta Sans.
- **Serif display, cool/blue single-accent palette** — wrong register for
  a warm community utility.

## Exports

Once locked, tokens persist into `acro-agenda/theme.json`
(`settings.color.palette`, `typography.fontFamilies` + `fontFace`,
`fontSizes`, `spacingSizes`) — that file is the source of truth for
WordPress. Hand-written CSS references only `--wp--preset--*` vars.
