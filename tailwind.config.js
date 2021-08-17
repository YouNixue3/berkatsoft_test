module.exports = {
    purge: [
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            fontFamily: {
                default: ['Josefin Sans']
            },
        }
    },
    variants: {
        extend: {
            ringWidth: ['hover'],
            ringColor: ['hover'],
            borderWidth: ['hover'],
            grayscale: ['hover'],
            height: ['hover'],
            width: ['hover'],
            backgroundColor: ['hover', 'focus', 'active']
        },
    },
    plugins: [],
}
