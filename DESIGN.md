---
name: InnovBorders
description: Editorial community and programmes website for professionals and innovators.
colors:
  primary: "#fca311"
  ink: "#191919"
  muted: "#565656"
  paper: "#ffffff"
  soft: "#f6f6f6"
  border: "#dedede"
typography:
  display:
    fontFamily: "Catamaran, sans-serif"
    fontSize: "clamp(3rem, 7vw, 6rem)"
    fontWeight: 800
    lineHeight: 1.04
    letterSpacing: "-0.035em"
  body:
    fontFamily: "Catamaran, sans-serif"
    fontSize: "18px"
    fontWeight: 400
    lineHeight: 1.6
rounded:
  sm: "3px"
  md: "6px"
spacing:
  sm: "8px"
  md: "16px"
  lg: "32px"
  xl: "64px"
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: "16px 30px"
---

# Design System: InnovBorders

## Overview

**Current programme title:** Diaries of Project Managers: Real Problems, Real People, Real Projects.

Use the full title in the homepage hero and programme page H1. Use "Diaries of Project Managers" for compact navigation and breadcrumbs. Retain the existing `/open-conversations` URL for backwards compatibility; URL paths and CSS selectors are not visible programme names.


**Creative North Star: The Working Room.** The website should feel like a useful invitation into real conversations and practical work: editorial, confident, and human. Specific programme details and clear calls to action matter more than trend-driven illustration or decorative flourishes. This direction is documented from the site's existing static HTML/Catamaran template and the owner's confirmed accent-color decision.

## Colors

- **Brand accent:** \`#FCA311\`, the only chromatic accent. Reserve for active states, important details, primary actions and select emphasis.
- **Ink:** \`#191919\` for deep dark surfaces and high-contrast foreground text.
- **Paper:** \`#FFFFFF\` for primary reading surfaces.
- **Muted neutral:** \`#565656\` for secondary text.
- **Soft neutral:** \`#F6F6F6\` for occasional section contrast.
- **Rule:** \`#DEDEDE\` for separators.

No purple, lilac, arbitrary pastel or gradient accent systems. Neutral greys and white are functional rather than competing brand colors. All orange buttons use dark foreground ink for readable contrast. Root runtime values are owned by \`assets/css/innovborders-brand.css\`, which is loaded after the legacy \`oslim.css\` theme.

## Typography

Catamaran is the established, exclusive site font for headings, slide titles, navigation, buttons and body copy. New programme pages must inherit the existing `--oslim-font` rather than importing a separate display typeface. Keep readable hierarchy with the existing font's size and weight scale. Aim for 65–75 characters in long-form copy.

## Layout

Use the existing Bootstrap container and navigation system. Keep a coherent grid with alignment between main headings and content. Section changes should be established through white space and subtle full-width neutral alternation, not grids of identical shadowed cards. Desktop content may split 7/5 or 8/4; narrow screens read in a single column.

## Elevation & Depth

Mostly flat and editorial. Prefer fine separators and grouping over hard-edged offset shadows or illuminated surfaces. Shadows only where a component's hierarchy truly requires elevation.

## Shapes

Use restrained 3–6px corners for controls. Avoid pill-like decorative labels, oversized circles, radial-gradient ornaments, and simulated imagery.

## Components

- **Navigation:** Home, Projects, Diaries of Project Managers, Program (dropdown: $100 Challenge), and FAQs appear in the same order across all public HTML routes. The active page has \`aria-current="page"\`; mobile navigation is generated from the same markup. The $100 Challenge is a completed programme: restore its original winner page as an archive, but do not restore its former homepage promotional slide.
- **Primary button:** Orange background, near-black text. On hover, near-black surface and white text. Visible keyboard focus.
- **Programme sections:** Editorial headings, factual metadata, ruled narrative blocks, selective two-column reading patterns, and a clear ending contact action.
- **Homepage slider:** The Diaries of Project Managers feature must use the existing `main-slider__content`, `section-title__tagline`, `h2` and `thm-btn` pattern without bespoke font, layout, heading-size, button or animation overrides. Reuse Swiper and maintain the other slides and controls. Its documentary event photograph may have a neutral text-legibility overlay and a small image credit.

## Do's and Don'ts

- **Do** use \`#FCA311\` as the single accent throughout.
- **Do** use real programme copy and stated facts: confirmed 31 October 2026, Akure, in-person, 25 participants. The exact venue will be shared with selected participants.
- **Do** make the first viewport answer what the gathering is and why it matters.
- **Do** use the confirmed Google Form expression-of-interest link: `https://forms.gle/ZQd4s63dsanmumyu5`. The date is 31 October 2026; the exact venue is shared only with selected participants. Do not invent an address or imply all applicants are selected.
- **Don't** restore the completed $100 Challenge promotion to homepage or primary navigation.
- **Don't** use an additional font or an unrelated hero layout. Avoid decorative glowing gradients, equal-height icon cards, repetitive uppercase eyebrow pills, or purposeless motion.
- **Don't** redesign unrelated project content as part of programme updates.
