/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php}"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Space Grotesk", "sans-serif"],
        display: ["Bungee", "cursive"],
        action: ["Bangers", "cursive"],
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
