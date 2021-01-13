# Deploy manager

## Local development

### Configuration

```bash
cp .env.example .env
```

### Dependencies

```bash
git clone https://github.com/itsjeffro/deploy.git

composer i
```

### Assets

```bash
npm i && npm run prod|watch|dev
```

### Database

```bash
php artisan migrate --seed
```

### Docker

Add `local.deploy-manager.itsjeffro.com` to your hosts file.

```bash
cp docker-compose.yml.dist docker-compose.yml

docker-compose up -d
```
