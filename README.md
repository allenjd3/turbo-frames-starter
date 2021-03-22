# Quick Project for Testing Turbo

First, clone the project into a file

```bash
git clone git@github.com:allenjd3/turbo-frames-starter.git
```

Then run -

```bash
cd turbo-frames-starter
cp .env.example .env
source .bashrc-local
```
Once you source the .bashrc-local you can run 

```bash
run_init
sail up -d
sail artisan key:generate
sail artisan migrate
```

Then go watch the vid!

