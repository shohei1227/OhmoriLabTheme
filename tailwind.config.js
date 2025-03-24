/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./*.php", "./**/*.php"], // 中に値を入れてビルドすると、そこで使用されるCSSのみしかtailwind.cssに記載されなくなる
  content: ["./*.php", "./**/*.php"],
  theme: {
    extend: {
      colors: {
        'main-red': '#e03131',
        primary: {
          '50': '#fff5f5',
          '100': '#ffe3e3',
          '200': '#ffc9c9',
          '300': '#ffa8a8',
          '400': '#ff8787',
          '500': '#ff6b6b',
          '600': '#fa5252',
          '700': '#f03e3e',
          '800': '#e03131',
          '900': '#c92a2a',
          '950': '#a51111',
        },
      },
    },
  },
  plugins: [],
}