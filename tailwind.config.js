/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,php}",
    "./get-started/**/*.html",
    "./ai-productivity/**/*.html",
    "./energy-discipline/**/*.html",
    "./life-quality/**/*.html",
    "./feel-alive-reset/**/*.html",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Lato", "sans-serif"],
        display: ["Poppins", "sans-serif"],
        action: ["Poppins", "sans-serif"],
      },
      colors: {
        comic: {
          yellow: "#ffff00",
          red: "#d30000",
          black: "#000000",
          white: "#ffffff",
        },
      },
    },
  },
  plugins: [
    require("@tailwindcss/forms"),
    require("@tailwindcss/container-queries"),
  ],
};
