# Acro-Agenda homepage direction

## Purpose

Turn the homepage into a landing page for acroyoga participants in Valencia.

- **Primary goal:** newsletter signup for a weekly roundup of local acroyoga events.
- **Secondary goal:** keep the existing call to submit an event visible and easy to reach.
- **Keep:** the Fair Events calendar and Fair Audience mailing-signup functionality.

The visitor should immediately understand what Acro-Agenda is, why it is useful, and what to do next: subscribe to the weekly agenda.

## Core message

**Tu próxima inversión acrobática empieza aquí.**

Recibe cada semana los planes de acroyoga de Valencia: jams, clases, talleres y festivales.

Suggested form CTA: **Quiero la agenda**

Signup reassurance: **Gratis · un correo semanal · baja cuando quieras**

## Page structure

```text
[Logo]                                      [Publica tu evento →]

ACROYOGA EN VALENCIA, SIN PERDERTE NADA.
Tu próxima inversión acrobática empieza aquí.
Recibe cada semana los planes de acroyoga de Valencia:
jams, clases, talleres y festivales.

[ Tu email ______________________________ ] [ Quiero la agenda ]
Gratis · un correo semanal · baja cuando quieras

                  ↓ Próximos vuelos
[ 3–4 selected upcoming-event cards ]
[ Ver toda la agenda → ]

[ Suscribirse al calendario ]              [ Instagram ]
```

Immediately below the hero, add a small secondary band for organisers:

> **¿Organizas algo?** Compártelo gratis →

This should link to **Publica tu evento**. It is deliberately present, but visually quieter than the newsletter signup.

## Sections and copy

### Hero

Eyebrow / small label:

> Acro-Agenda · Valencia

Headline:

> **ACROYOGA EN VALENCIA, SIN PERDERTE NADA.**

Supporting copy:

> Tu próxima inversión acrobática empieza aquí. Recibe cada semana los planes de acroyoga de Valencia: jams, clases, talleres y festivales.

Form:

- Email field placeholder: `tu@email.com`
- Button: `Quiero la agenda`
- Reassurance: `Gratis · un correo semanal · baja cuando quieras`

### Upcoming events

Section title:

> **Próximos vuelos**

Show three or four curated, imminent events before the full calendar. Each card should make the practical information scannable:

- date / time;
- event name;
- place;
- a simple link or button such as `Ver evento →`.

Section CTA:

> **Ver toda la agenda →**

### Full calendar

Keep the existing Fair Events calendar after the curated events. It is a browsing tool, not the hero of the page.

Keep the existing calendar-subscription action, labelled clearly:

> **Suscribirse al calendario**

### Social follow

> ¿Prefieres verlo al vuelo? Síguenos en Instagram: **@acro.agenda.valencia**

## Newsletter-form principle

The current signup form asks for name, surname, and email. For this landing page, email should be the lowest-friction first step.

Preferred implementation:

- show only the email field in the hero;
- collect name later, or make name and surname optional if the mailing setup allows it;
- preserve required, accessible labels even if they are visually hidden;
- show a specific success state: `Revisa tu correo para confirmar la suscripción.`

If the plugin cannot support a compact form, the hero can link to the full existing signup form lower on the page. Avoid placing three required fields above the fold if possible.

## Visual direction

Acro-Agenda should feel energetic, local, warm and human—not like a generic event directory or SaaS product.

- **Palette:** deep cobalt, warm coral, sunlit sand, off-white, and one dark ink colour for type.
- **Signature element:** a continuous curved **flight path** line. It starts around the newsletter form and weaves down toward the upcoming-event cards, recalling a flyer’s path through a washing-machine. Use it sparingly.
- **Photography:** if used, favour real outdoor jams, movement, trust, and human connection over posed fitness imagery.
- **Typography:** use a highly legible body face plus a distinctive, confident display face for the main statement. Keep the navigation and event metadata compact and quiet.
- **Motion:** at most one orchestrated moment—e.g. the flight path gently draws in on page load. Respect `prefers-reduced-motion`.

The flyer path is the page’s one bold visual gesture. The rest should remain disciplined and easy to scan.

## UX requirements

- Mobile-first; the email field and signup CTA must remain prominent and easy to tap.
- Accessible labels, visible keyboard focus, sufficient colour contrast, and reduced-motion support.
- Do not hide the event-submission route; retain it in the header on all breakpoints.
- Do not make the full calendar the first thing visitors see.
- Track form starts and completed signups in Plausible to measure the redesign.

## Prompt for a future Codex/WordPress session

```text
Redesign the Acro-Agenda WordPress homepage into a conversion-focused landing page
for acroyoga participants in Valencia.

Primary goal: newsletter signup for weekly event alerts.
Secondary goal: “Publica tu evento” remains visible above the fold.

Keep the existing Fair Events calendar and Fair Audience mailing-signup blocks.
Create a Gutenberg/block-theme-native design, not a generic SaaS landing page.
Use Spanish copy, mobile-first layout, accessible form labels and focus states.

Visual direction: energetic Mediterranean acroyoga; deep cobalt, warm coral,
sunlit sand, and a playful continuous “flight path” line connecting the hero
to upcoming events. Use the calendar only after a curated “Próximos vuelos”
section with 3–4 events. Make email the lowest-friction signup path.

Use the homepage.md brief as the source of truth for the page hierarchy and copy.
Before changing blocks, inspect the current Site Editor template, template parts,
theme.json, and the exact attributes supported by the installed Fair Events and
Fair Audience blocks. Preserve working calendar and newsletter integrations.
```
