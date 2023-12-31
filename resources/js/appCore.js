export default {
    install: (app) => {
        const componentList = {
            'my-loader': './components/client/layouts/Loader.vue',
            'SplashScreen': './components/client/layouts/SplashScreen.vue',
        };

        for (const [name, path] of Object.entries(componentList)) {
            import(path).then((module) => {
                app.component(name, module.default);
            });
        }
    },
};
