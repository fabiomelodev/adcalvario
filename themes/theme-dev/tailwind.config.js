/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require("fast-glob").sync(["./**/*.php"]),
  safelist: [
    "mb-1",
    "mb-8",
    "w-4/12",
    "outline-0",
    "bg-gray-900",
    "py-3",
    "h-56",
    "max-h-56",
    "outline-0",
    "bg-purple-600",
    "lg:backdrop-blur-none",
    "backdrop-blur-sm",
    "lg:col-span-1",
    "lg:col-span-2",
    "lg:col-span-3",
    "btn-member-submit",
  ],
  theme: {
    container: {
      center: true,
      padding: "1rem",
    },
    extend: {},
  },
  plugins: [],
};
