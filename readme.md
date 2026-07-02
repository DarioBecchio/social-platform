# 👥 Social Platform – Backend PHP

Backend di una piattaforma social sviluppato in PHP nativo (senza framework), con progettazione e implementazione del database relazionale. Quarto esame del corso Full-Stack Web Development di Boolean Academy.

## Funzionalità

- Gestione utenti, post, media, tag e like
- Relazioni tra entità (post con più tag, like collegati a utenti e post)
- Query PHP/MySQL per il recupero e la visualizzazione dei contenuti

## Struttura del database

Il progetto include la progettazione dello schema relazionale (vedi `social_network_diagram.png` e `sql.md`), con le seguenti entità principali:

- **Users** – anagrafica utenti
- **Post** – contenuti pubblicati, collegati a un utente
- **Media** – file (foto/video) associati ai post
- **Tags** – etichette associabili ai post (relazione molti-a-molti tramite `Post_Tags`)
- **Likes** – interazioni tra utenti e post

## Tecnologie utilizzate

- PHP (nativo, no framework)
- MySQL
- Progettazione ER del database

## Cosa ho imparato

- Progettare uno schema relazionale da zero, comprese le relazioni molti-a-molti
- Scrivere query PHP/MySQL per interrogare un database relazionale
- Strutturare un progetto backend senza framework, gestendo manualmente routing e logica

## Come avviarlo in locale

```bash
git clone https://github.com/DarioBecchio/social-platform.git
cd social-platform
```

Importa lo schema del database (vedi `sql.md`), configura le credenziali in `env.php` e avvia un server PHP locale:

```bash
php -S localhost:8000
```

---

*Progetto didattico realizzato durante il corso Full-Stack Web Development – Boolean Academy.*
