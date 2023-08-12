import colors from 'tailwindcss/colors'
import forms from '@tailwindcss/forms'
import typography from '@tailwindcss/typography'

export default {
    presets: [
        
        require('./vendor/wireui/wireui/tailwind.config.js')
    ], //ACA ESTA EL ERROR
    content: [
        './resources/**/*.blade.php', './vendor/filament/**/*.blade.php',
        './vendor/wireui/wireui/resources/**/*.blade.php',
        './vendor/wireui/wireui/ts/**/*.ts',
        './vendor/wireui/wireui/src/View/**/*.php'
    ],
    theme: {
        extend: {
            colors: {
                danger: colors.rose,
                primary:{
                    '50': '#000',
                    '100': '#000',
                    '200': '#000',
                    '300': '#000',
                    '400': '#000',
                    '500': '#000',
                    '600': '#000',
                    '700': '#000',
                    '800': '#000',
                    '900': '#000',
                    '950': '#000'
                  },
                success: colors.green,
                warning: colors.yellow,
            },
        },
    },
    plugins: [forms, typography],
}
