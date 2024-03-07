/** @type {import('tailwindcss').Config} config */
const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    extend: {
      fontFamily: {
        prompt: ["Prompt", "sans-serif"],
        baijam: ["Bai Jamjuree", "sans-serif"],
      },
      colors: {
        'tvs-orange-1': '#ED3212',
        'tvs-dark-1': '#181818',
        'tvs-gray-1': '#555555',
      },
      aspectRatio: {
        '4/3': '4 / 3',
      },
    },
    container: {
      center: true,
    },
  },
  plugins: [],
};

export default config;
