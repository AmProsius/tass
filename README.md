# TASS Boilerplate

_TASS_ is short for an application that consists of Symfony + Stimulus + Tailwind CSS + Alpine.js.

## Preliminary Considerations

This repository contains opinionated plugins. The following plugins are opt-out:

```sh
yarn remove @tailwindcss/forms
yarn remove @tailwindcss/typography
yarn remove @alpinejs/collapse
```

On the other hand, these packs are opt-in:

```sh
composer require symfony/apache-pack
```

Also Stimulus is opt-in. If you need Stimulus in your app, uncomment these references:

```diff
--- a/assets/app.js
+++ b/assets/app.js
@@ -1,3 +1,3 @@

import "./styles/app.css";

-//import "./bootstrap";
+import "./bootstrap";
```

```diff
--- a/webpack.config.js
+++ b/webpack.config.js
@@ -25,2 +25,2 @@

  // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
-  //.enableStimulusBridge("./assets/controllers.json")
+  .enableStimulusBridge("./assets/controllers.json")
```

### Build

1. Install dependencies
   ```sh
   composer install
   composer install --working-dir=tools/php-cs-fixer
   yarn install
   yarn dev
   ```
2. Start database
   ```sh
   docker-compose up -d database
   ```
3. Populate database
   ```sh
   symfony console doctrine:migrations:migrate
   symfony console doctrine:fixtures:load --purge-with-truncate
   ```
4. Start local web server
   ```sh
   symfony server:start -d
   symfony open:local
   ```

### Develop

1. Start Webpack Encore file watcher
   ```sh
   yarn watch
   ```
2. Start database
   ```sh
   docker-compose up -d database
   ```
3. Start local web server
   ```sh
   symfony server:start -d
   symfony open:local
   ```

#### Pre-Commit

- Smoke test your URLs
  ```sh
  php bin/phpunit
  ```
- Format your PHP files
  ```sh
  tools/php-cs-fixer/vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php
  ```

### Terminate

1. Stop local web server
   ```sh
   symfony server:stop
   ```
2. Stop database
   ```sh
   docker-compose stop
   ```
3. Destroy database _(optional)_
   ```sh
   docker-compose down
   ```
4. Stop Webpack Encore file watcher
