# Codex Image Playbook

Last updated: 2026-04-24

## Why this exists
- Keep all site imagery consistent with the current visual identity.
- Record what is already working so new images match the same style and quality bar.
- Provide a quick reference for future image generation and placement decisions.

## Progress snapshot (where we're up to)
- 2026-04-24: Reworked `get-started.html` final CTA into a newsletter-first block with opt-in form for **The Upgraded Man**.
- 2026-04-24: Added right-side image panel to the newsletter block and optimized source image `ChatGPT Image Apr 24, 2026, 07_16_53 PM.png` into `upgraded-man-opt.jpg` (approx 2,124 KB -> 132 KB).
- 2026-04-24: Added `id="newsletter-signup"` anchor in `get-started.html` to support direct CTA jumps from other pages.
- 2026-04-24: Added `favicon.svg` (J brand mark) and linked it across all site pages (`index.html`, `get-started.html`, `ai-productivity.html`, `energy-discipline.html`, `life-quality.html`).
- 2026-04-24: Added homepage build-status modal in `index.html` for under-construction destinations; currently used for nav/top links and log links that should become standalone pages later.
- 2026-04-24: Restored hero `Quest Logs` button to in-page navigation (`#journey`) while keeping under-construction links on dialog behavior.
- 2026-04-24: Updated Quest Logs section structure in `index.html`:
  - Added sub-heading: `Quest Logs: What I'm Building Now`
  - Added consistent numbering `Log #001` to `Log #004`
  - Removed date from main card
  - Updated main log title to benefit-driven: `How I Use AI To Build An Unstoppable Winning System`
  - Added `Read Log` CTAs to all four log cards (all dialog-triggered for now)
- 2026-04-24: Replaced homepage footer with trust footer pattern (brand statement + single contact + single CTA), then switched CTA target to newsletter signup (`./get-started.html#newsletter-signup`).
- 2026-04-23: Replaced Morning image asset `morning-energy-opt.webp` from `ChatGPT Image Apr 23, 2026, 02_11_50 PM.png`.
- 2026-04-23: Added dedicated Midday image asset `midday-focus-opt.webp` from `ChatGPT Image Apr 23, 2026, 03_32_24 PM.png`.
- 2026-04-23: Added dedicated Afternoon image asset `afternoon-execution-opt.webp` from `ChatGPT Image Apr 23, 2026, 06_40_15 PM.png`.
- 2026-04-23: Added dedicated Evening image asset `evening-winddown-opt.webp` from `ChatGPT Image Apr 23, 2026, 07_01_11 PM.png`.
- 2026-04-23: Added dedicated Featured Setup image asset `agents-apps-timeback-opt.webp` from `ChatGPT Image Apr 23, 2026, 08_15_40 PM.png`.
- Optimization path used: `sharp-cli` to `.webp` at quality `76`, resized to `1024x1024`.
- `get-started.html` Morning card (Day Flow section) now points to `morning-energy-opt.webp`.
- `get-started.html` Midday card (Day Flow section) now points to `midday-focus-opt.webp`.
- `get-started.html` Afternoon card (Day Flow section) now points to `afternoon-execution-opt.webp`.
- `get-started.html` Evening card (Day Flow section) now points to `evening-winddown-opt.webp`.
- `get-started.html` Featured Setup card now points to `agents-apps-timeback-opt.webp`.
- Start Here "What I Actually Use AI For" cards now use dedicated assets:
  - `personal-ai-opt.webp` for Personal AI
  - `work-ai-opt.webp` for Work AI
- Current Day Flow image mapping in `get-started.html`:
  - Morning: `morning-energy-opt.webp`
  - Midday: `midday-focus-opt.webp`
  - Afternoon: `afternoon-execution-opt.webp`
  - Evening: `evening-winddown-opt.webp`

## Current position (single source of truth)
- Morning Day Flow image is done.
- Midday Day Flow image is done.
- Afternoon Day Flow image is done.
- Evening Day Flow image is done.
- Day Flow replacements in `get-started.html` are now complete.
- Featured Setup replacement in `get-started.html` is now complete.
- Newsletter opt-in experience in `get-started.html` is now complete (layout + image + CTA anchor).
- Homepage under-construction dialog routing is now active for placeholder destinations.
- Quest Logs section scaffolding is now in place; content detail for each log is still pending.
- Active target: replace `focused-opt.webp` in `index.html` Built With AI panel with a dedicated build/workflow visual.

## Next images to replace (working checklist)
- [x] `get-started.html` Featured Setup card: replace `command-center-opt.webp` with a dedicated setup visual (`agents-apps-timeback-opt.webp`).
- [x] `get-started.html` Day Flow (Midday): replace `focused-opt.webp` with a dedicated midday scene (`midday-focus-opt.webp`).
- [x] `get-started.html` Day Flow (Afternoon): replace `meproductive-opt.webp` with a dedicated afternoon scene (`afternoon-execution-opt.webp`).
- [x] `get-started.html` Day Flow (Evening): replace `life-quality-opt.webp` with a dedicated evening scene (`evening-winddown-opt.webp`).
- [ ] `index.html` Built With AI panel: replace `focused-opt.webp` with a dedicated build/workflow visual. **(Current focus)**
- [ ] After each replacement, export as `-opt.webp`, then update both the asset log and size log below.

## Current image direction (what we have been doing)
- Style: cinematic seinen manga look with a mature, serious lead character.
- Tone: disciplined, focused, resilient, practical growth.
- Palette: black, red, yellow, white with high contrast.
- Mood details: dramatic lighting, gritty texture, occasional glow/ember accents.
- Output format: optimized `.webp` assets in project root (with occasional optimized `.jpg` when source/tooling makes it the pragmatic choice).

## File naming convention
- Use kebab-case + `-opt.webp` suffix.
- Example: `veteran-prompting-opt.webp`, `main-quest-city-opt.webp`.
- `-opt` means final compressed/optimized asset for web delivery.

## UI integration pattern (image containers)
- Hero/feature panels:
  - Wrapper uses thick border + shadow + halftone treatment.
  - Typical classes: `ink-border-lg`, `comic-shadow-black`, `manga-panel-effect`.
  - Image class: `w-full h-auto object-cover`.
  - Overlay: dark-to-transparent gradient for text readability.
- Grid/cards:
  - Fixed square frame, strong border, slight rotation for comic-panel feel.
  - Image class: `w-full h-full object-cover`.
- Motion:
  - Subtle hover rotate reset and scale effects only (`group-hover`).
  - Keep movement small; image remains readable.

## Image asset log (from current pages)

| Asset | Primary use | Current placements |
|---|---|---|
| `me-website-opt.webp` | Main homepage hero portrait | `index.html` hero |
| `meproductive-opt.webp` | AI Productivity identity image | `index.html` Skill Tree card, `ai-productivity.html` hero |
| `energy-discipline-opt.webp` | Energy Discipline identity image | `index.html` Skill Tree card, `energy-discipline.html` hero |
| `life-quality-opt.webp` | Life Quality identity image | `index.html` Skill Tree card, `life-quality.html` hero |
| `newtoai-opt.webp` | Start Here identity image | `get-started.html` hero, `index.html` Start Here card |
| `personal-ai-opt.webp` | Start Here personal AI panel image | `get-started.html` Personal AI card |
| `veteran-prompting-opt.webp` | Prompting tutorial image | `index.html` Quest Log tutorial tile |
| `focused-opt.webp` | Identity/build placeholder visual | `index.html` Built With AI section |
| `agents-apps-timeback-opt.webp` | Start Here Featured Setup image | `get-started.html` Featured Setup card |
| `midday-focus-opt.webp` | Start Here midday Day Flow image | `get-started.html` Day Flow (Midday) |
| `afternoon-execution-opt.webp` | Start Here afternoon Day Flow image | `get-started.html` Day Flow (Afternoon) |
| `evening-winddown-opt.webp` | Start Here evening Day Flow image | `get-started.html` Day Flow (Evening) |
| `main-quest-city-opt.webp` | Main quest visual | `index.html` Quest Logs featured card |
| `command-center-opt.webp` | Workflow visual | `index.html` Quest Logs workflow tile |
| `work-ai-opt.webp` | Start Here work AI panel image | `get-started.html` Work AI card |
| `morning-energy-opt.webp` | Start Here morning Day Flow image | `get-started.html` Day Flow (Morning) |
| `human-edge-opt.webp` | Opinion log visual | `index.html` Quest Logs opinion tile |
| `upgraded-man-opt.jpg` | Start Here newsletter image | `get-started.html` newsletter opt-in panel |

## Asset size log (current)
- `agents-apps-timeback-opt.webp` - 150,958 bytes
- `afternoon-execution-opt.webp` - 130,974 bytes
- `command-center-opt.webp` - 56,640 bytes
- `energy-discipline-opt.webp` - 73,472 bytes
- `evening-winddown-opt.webp` - 60,592 bytes
- `focused-opt.webp` - 126,814 bytes
- `human-edge-opt.webp` - 133,220 bytes
- `life-quality-opt.webp` - 38,400 bytes
- `main-quest-city-opt.webp` - 104,814 bytes
- `meproductive-opt.webp` - 166,242 bytes
- `me-website-opt.webp` - 136,894 bytes
- `midday-focus-opt.webp` - 161,146 bytes
- `morning-energy-opt.webp` - 65,456 bytes
- `newtoai-opt.webp` - 150,524 bytes
- `personal-ai-opt.webp` - 127,838 bytes
- `veteran-prompting-opt.webp` - 49,236 bytes
- `work-ai-opt.webp` - 109,836 bytes
- `upgraded-man-opt.jpg` - 135,285 bytes

## New image brief template (reuse this)
Use this prompt structure whenever creating the next image:

1. Subject: "A focused 40+ male protagonist improving life with discipline and AI."
2. Style: "Cinematic seinen manga, gritty texture, high contrast, sharp linework."
3. Lighting/color: "Black/red/yellow palette, dramatic highlights, subtle ember accents."
4. Composition: "Tight portrait or strong mid-shot, clear focal point, room for UI crops."
5. Output: "Web-ready `.webp`, clean details at square and landscape crop points."

## Quality checklist before adding a new image
- Matches the same protagonist energy and overall visual tone.
- Reads clearly at both large hero and small card sizes.
- Works inside bordered comic frame + halftone overlay.
- No muddy shadows; face and key details remain legible.
- Exported as optimized `.webp` and named with `-opt.webp`.
