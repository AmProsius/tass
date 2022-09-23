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

### Build

1. Install dependencies
   ```sh
   composer install
   yarn install
   yarn dev
   ```
2. Start local web server
   ```sh
   symfony server:start -d
   symfony open:local
   ```

### Develop
1. Start Webpack Encore file watcher
   ```sh
   yarn watch
   ```
2. Start local web server
   ```sh
   symfony server:start -d
   symfony open:local
   ```

### Terminate

1. Stop local web server
   ```sh
   symfony server:stop
   ```
2. Stop Webpack Encore file watcher