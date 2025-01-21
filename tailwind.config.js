/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ["./src/**/*.{html,js,php}"],
	theme: {
		extend: {
			screens: {
				'xs': '480px',  // Define extra small breakpoint
			}
		},
	},
	plugins: [],
}

