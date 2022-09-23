// @ts-check

/**
 * Build configuration
 *
 * @see {@link https://bud.js.org/guides/getting-started/configure}
 * @param {import('@roots/bud').Bud} app
 */
export default async (app) => {
  app
    /**
     * Application entrypoints
     */
    .entry({
      app: ["@scripts/app", "@styles/app"],
      editor: ["@scripts/editor", "@styles/editor"],
    })

    /**
     * Directory contents to be included in the compilation
     */
    // .assets(["images"])
    // .assets([
    //     [app.path('@src/images'),  app.path('@dist/images')],
    //     [app.path('@src/fonts'),   app.path('@dist/fonts')],
    //     [app.path('@src/scripts'), app.path('@dist/scripts')],
    //     [app.path('@src/styles'),  app.path('@dist/styles')],
    //   ])

    .assets(["images"])

    /**
     * Matched files trigger a page reload when modified
     */
    .watch(["resources/views/**/*", "app/**/*"])

    /**
     * Proxy origin (`WP_HOME`)
     */
    .proxy("http://192.168.5.101/fanvestor-wp")

    /**
     * Development origin
     */
    .serve("http://0.0.0.0:3000")

    /**
     * URI of the `public` directory
     */
    // .setPublicPath("/app/themes/sage/public/");
    .setPublicPath("/app/themes/fanvestor/public/");
};
