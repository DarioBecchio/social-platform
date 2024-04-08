# Entità Users

- User_ID (PK) | TinyInt | Unique | AI
- Nome | Varchar (50) | NotNull
- Cognome | Varchar (50) | NotNull
- Data di nascita| Date | NotNull
- Email | Varchar (100)| NotNull
- Password | Varchar (50) | NotNull
- Altre info | Varchar (255)| Null

# Post

- Post_ID (PK) | TinyInt | Unique | AI
- Testo del Post | Text | NotNull
- Data e ora del post | DateTime | NotNull
- User_ID (FK)

# Media

- Media_ID (PK) | TinyInt | Unique | AI
- Tipo (foto,video etc)| Varchar (50)| Notnull
- URL (percorso file) | Varchar(100)| NotNull
- Post_ID

# Tags

- Tags_ID | TinyInt | Unique | AI
- Nome del tag | Varchar (50)| Unique | Notnull

# Likes

- Likes_ID | TinyInt | Unique | AI
- User_ID
- Post_ID

# Post_Tags

- Post_ID
- Tags_ID
