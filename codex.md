# Codex Image Playbook

Last updated: 2026-04-22

## Why this exists
- Keep all site imagery consistent with the current visual identity.
- Record what is already working so new images match the same style and quality bar.
- Provide a quick reference for future image generation and placement decisions.

## Progress snapshot (where we're up to)
- 2026-04-22: Added new Morning image asset `morning-energy-opt.webp` from `ChatGPT Image Apr 22, 2026, 08_34_47 PM.png`.
- Optimization path used: `sharp-cli` to `.webp` at quality `76`, resized to `1024x1024`.
- `get-started.html` Morning card (Day Flow section) now points to `morning-energy-opt.webp`.
- Start Here "What I Actually Use AI For" cards now use dedicated assets:
  - `personal-ai-opt.webp` for Personal AI
  - `work-ai-opt.webp` for Work AI
- Current Day Flow image mapping in `get-started.html`:
  - Morning: `morning-energy-opt.webp`
  - Midday: `focused-opt.webp`
  - Afternoon: `meproductive-opt.webp`
  - Evening: `life-quality-opt.webp`

## Next images to replace (working checklist)
- [ ] `get-started.html` Featured Setup card: replace `command-center-opt.webp` with a dedicated setup visual.
- [ ] `get-started.html` Day Flow (Midday): replace `focused-opt.webp` with a dedicated midday scene.
- [ ] `get-started.html` Day Flow (Afternoon): replace `meproductive-opt.webp` with a dedicated afternoon scene.
- [ ] `get-started.html` Day Flow (Evening): replace `life-quality-opt.webp` with a dedicated evening scene.
- [ ] `index.html` Built With AI panel: replace `focused-opt.webp` with a dedicated build/workflow visual.
- [ ] After each replacement, export as `-opt.webp`, then update both the asset log and size log below.

## Current image direction (what we have been doing)
- Style: cinematic seinen manga look with a mature, serious lead character.
- Tone: disciplined, focused, resilient, practical growth.
- Palette: black, red, yellow, white with high contrast.
- Mood details: dramatic lighting, gritty texture, occasional glow/ember accents.
- Output format: optimized `.webp` assets in project root.

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
| `focused-opt.webp` | Identity + Start Here placeholder visual | `index.html` Built With AI section, `get-started.html` Day Flow (Midday) |
| `main-quest-city-opt.webp` | Main quest visual | `index.html` Quest Logs featured card |
| `command-center-opt.webp` | Workflow visual + Start Here placeholder | `index.html` Quest Logs workflow tile, `get-started.html` Featured Setup card |
| `work-ai-opt.webp` | Start Here work AI panel image | `get-started.html` Work AI card |
| `morning-energy-opt.webp` | Start Here morning Day Flow image | `get-started.html` Day Flow (Morning) |
| `human-edge-opt.webp` | Opinion log visual | `index.html` Quest Logs opinion tile |

## Asset size log (current)
- `command-center-opt.webp` - 56,640 bytes
- `energy-discipline-opt.webp` - 73,472 bytes
- `focused-opt.webp` - 126,814 bytes
- `human-edge-opt.webp` - 133,220 bytes
- `life-quality-opt.webp` - 38,400 bytes
- `main-quest-city-opt.webp` - 104,814 bytes
- `meproductive-opt.webp` - 166,242 bytes
- `me-website-opt.webp` - 136,894 bytes
- `morning-energy-opt.webp` - 163,422 bytes
- `newtoai-opt.webp` - 150,524 bytes
- `personal-ai-opt.webp` - 127,838 bytes
- `veteran-prompting-opt.webp` - 49,236 bytes
- `work-ai-opt.webp` - 109,836 bytes

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
