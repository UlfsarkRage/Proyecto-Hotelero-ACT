PGDMP                         {         	   Hoteleria    15.2    15.2 =    F           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            G           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            H           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            I           1262    17022 	   Hoteleria    DATABASE     �   CREATE DATABASE "Hoteleria" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Colombia.1252';
    DROP DATABASE "Hoteleria";
                postgres    false                        2615    17023    EP2    SCHEMA        CREATE SCHEMA "EP2";
    DROP SCHEMA "EP2";
                postgres    false            �            1259    17025    failed_jobs    TABLE     %  CREATE TABLE "EP2".failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE "EP2".failed_jobs;
       EP2         heap    postgres    false    6            �            1259    17031    failed_jobs_id_seq    SEQUENCE     z   CREATE SEQUENCE "EP2".failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE "EP2".failed_jobs_id_seq;
       EP2          postgres    false    215    6            J           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE "EP2".failed_jobs_id_seq OWNED BY "EP2".failed_jobs.id;
          EP2          postgres    false    216            �            1259    17032    habitacions    TABLE     Z  CREATE TABLE "EP2".habitacions (
    id bigint NOT NULL,
    "Tipo_de_habitacion" character varying(255) NOT NULL,
    "Acomodacion" character varying(255) NOT NULL,
    "Hotel" character varying(255) NOT NULL,
    "N_Habitaciones" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE "EP2".habitacions;
       EP2         heap    postgres    false    6            �            1259    17037    habitacions_id_seq    SEQUENCE     z   CREATE SEQUENCE "EP2".habitacions_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE "EP2".habitacions_id_seq;
       EP2          postgres    false    6    217            K           0    0    habitacions_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE "EP2".habitacions_id_seq OWNED BY "EP2".habitacions.id;
          EP2          postgres    false    218            �            1259    17038    hotels    TABLE     d  CREATE TABLE "EP2".hotels (
    id bigint NOT NULL,
    "Nombre" character varying(255) NOT NULL,
    "NIT" integer NOT NULL,
    "Ciudad" character varying(255) NOT NULL,
    "Direccion" character varying(255) NOT NULL,
    "N_Habitaciones" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE "EP2".hotels;
       EP2         heap    postgres    false    6            �            1259    17043    hotels_id_seq    SEQUENCE     u   CREATE SEQUENCE "EP2".hotels_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE "EP2".hotels_id_seq;
       EP2          postgres    false    219    6            L           0    0    hotels_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE "EP2".hotels_id_seq OWNED BY "EP2".hotels.id;
          EP2          postgres    false    220            �            1259    17044 
   migrations    TABLE     �   CREATE TABLE "EP2".migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE "EP2".migrations;
       EP2         heap    postgres    false    6            �            1259    17047    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE "EP2".migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE "EP2".migrations_id_seq;
       EP2          postgres    false    6    221            M           0    0    migrations_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE "EP2".migrations_id_seq OWNED BY "EP2".migrations.id;
          EP2          postgres    false    222            �            1259    17048    password_resets    TABLE     �   CREATE TABLE "EP2".password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 "   DROP TABLE "EP2".password_resets;
       EP2         heap    postgres    false    6            �            1259    17053    personal_access_tokens    TABLE     �  CREATE TABLE "EP2".personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 )   DROP TABLE "EP2".personal_access_tokens;
       EP2         heap    postgres    false    6            �            1259    17058    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE "EP2".personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 3   DROP SEQUENCE "EP2".personal_access_tokens_id_seq;
       EP2          postgres    false    6    224            N           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     ]   ALTER SEQUENCE "EP2".personal_access_tokens_id_seq OWNED BY "EP2".personal_access_tokens.id;
          EP2          postgres    false    225            �            1259    17059    rooms    TABLE     T  CREATE TABLE "EP2".rooms (
    id bigint NOT NULL,
    "Tipo_de_habitacion" character varying(255) NOT NULL,
    "Acomodacion" character varying(255) NOT NULL,
    "Hotel" character varying(255) NOT NULL,
    "N_Habitaciones" integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE "EP2".rooms;
       EP2         heap    postgres    false    6            �            1259    17064    rooms_id_seq    SEQUENCE     t   CREATE SEQUENCE "EP2".rooms_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE "EP2".rooms_id_seq;
       EP2          postgres    false    226    6            O           0    0    rooms_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE "EP2".rooms_id_seq OWNED BY "EP2".rooms.id;
          EP2          postgres    false    227            �            1259    17069    users    TABLE     w  CREATE TABLE "EP2".users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE "EP2".users;
       EP2         heap    postgres    false    6            �            1259    17074    users_id_seq    SEQUENCE     t   CREATE SEQUENCE "EP2".users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE "EP2".users_id_seq;
       EP2          postgres    false    6    228            P           0    0    users_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE "EP2".users_id_seq OWNED BY "EP2".users.id;
          EP2          postgres    false    229            �           2604    17111    failed_jobs id    DEFAULT     n   ALTER TABLE ONLY "EP2".failed_jobs ALTER COLUMN id SET DEFAULT nextval('"EP2".failed_jobs_id_seq'::regclass);
 <   ALTER TABLE "EP2".failed_jobs ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    216    215            �           2604    17112    habitacions id    DEFAULT     n   ALTER TABLE ONLY "EP2".habitacions ALTER COLUMN id SET DEFAULT nextval('"EP2".habitacions_id_seq'::regclass);
 <   ALTER TABLE "EP2".habitacions ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    218    217            �           2604    17113 	   hotels id    DEFAULT     d   ALTER TABLE ONLY "EP2".hotels ALTER COLUMN id SET DEFAULT nextval('"EP2".hotels_id_seq'::regclass);
 7   ALTER TABLE "EP2".hotels ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    220    219            �           2604    17114    migrations id    DEFAULT     l   ALTER TABLE ONLY "EP2".migrations ALTER COLUMN id SET DEFAULT nextval('"EP2".migrations_id_seq'::regclass);
 ;   ALTER TABLE "EP2".migrations ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    222    221            �           2604    17115    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY "EP2".personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('"EP2".personal_access_tokens_id_seq'::regclass);
 G   ALTER TABLE "EP2".personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    225    224            �           2604    17116    rooms id    DEFAULT     b   ALTER TABLE ONLY "EP2".rooms ALTER COLUMN id SET DEFAULT nextval('"EP2".rooms_id_seq'::regclass);
 6   ALTER TABLE "EP2".rooms ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    227    226            �           2604    17118    users id    DEFAULT     b   ALTER TABLE ONLY "EP2".users ALTER COLUMN id SET DEFAULT nextval('"EP2".users_id_seq'::regclass);
 6   ALTER TABLE "EP2".users ALTER COLUMN id DROP DEFAULT;
       EP2          postgres    false    229    228            5          0    17025    failed_jobs 
   TABLE DATA           `   COPY "EP2".failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    EP2          postgres    false    215   G       7          0    17032    habitacions 
   TABLE DATA           �   COPY "EP2".habitacions (id, "Tipo_de_habitacion", "Acomodacion", "Hotel", "N_Habitaciones", created_at, updated_at) FROM stdin;
    EP2          postgres    false    217   #G       9          0    17038    hotels 
   TABLE DATA           u   COPY "EP2".hotels (id, "Nombre", "NIT", "Ciudad", "Direccion", "N_Habitaciones", created_at, updated_at) FROM stdin;
    EP2          postgres    false    219   rG       ;          0    17044 
   migrations 
   TABLE DATA           9   COPY "EP2".migrations (id, migration, batch) FROM stdin;
    EP2          postgres    false    221   H       =          0    17048    password_resets 
   TABLE DATA           B   COPY "EP2".password_resets (email, token, created_at) FROM stdin;
    EP2          postgres    false    223   �H       >          0    17053    personal_access_tokens 
   TABLE DATA           �   COPY "EP2".personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    EP2          postgres    false    224   �H       @          0    17059    rooms 
   TABLE DATA           z   COPY "EP2".rooms (id, "Tipo_de_habitacion", "Acomodacion", "Hotel", "N_Habitaciones", created_at, updated_at) FROM stdin;
    EP2          postgres    false    226   I       B          0    17069    users 
   TABLE DATA           t   COPY "EP2".users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
    EP2          postgres    false    228   �I       Q           0    0    failed_jobs_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('"EP2".failed_jobs_id_seq', 1, false);
          EP2          postgres    false    216            R           0    0    habitacions_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"EP2".habitacions_id_seq', 3, true);
          EP2          postgres    false    218            S           0    0    hotels_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('"EP2".hotels_id_seq', 35, true);
          EP2          postgres    false    220            T           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('"EP2".migrations_id_seq', 20, true);
          EP2          postgres    false    222            U           0    0    personal_access_tokens_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('"EP2".personal_access_tokens_id_seq', 1, false);
          EP2          postgres    false    225            V           0    0    rooms_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('"EP2".rooms_id_seq', 13, true);
          EP2          postgres    false    227            W           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('"EP2".users_id_seq', 1, false);
          EP2          postgres    false    229            �           2606    17126    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY "EP2".failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 E   ALTER TABLE ONLY "EP2".failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       EP2            postgres    false    215            �           2606    17128 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ]   ALTER TABLE ONLY "EP2".failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 L   ALTER TABLE ONLY "EP2".failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       EP2            postgres    false    215            �           2606    17130    habitacions habitacions_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY "EP2".habitacions
    ADD CONSTRAINT habitacions_pkey PRIMARY KEY (id);
 E   ALTER TABLE ONLY "EP2".habitacions DROP CONSTRAINT habitacions_pkey;
       EP2            postgres    false    217            �           2606    17132    hotels hotels_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY "EP2".hotels
    ADD CONSTRAINT hotels_pkey PRIMARY KEY (id);
 ;   ALTER TABLE ONLY "EP2".hotels DROP CONSTRAINT hotels_pkey;
       EP2            postgres    false    219            �           2606    17134    migrations migrations_pkey 
   CONSTRAINT     W   ALTER TABLE ONLY "EP2".migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 C   ALTER TABLE ONLY "EP2".migrations DROP CONSTRAINT migrations_pkey;
       EP2            postgres    false    221            �           2606    17136 $   password_resets password_resets_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY "EP2".password_resets
    ADD CONSTRAINT password_resets_pkey PRIMARY KEY (email);
 M   ALTER TABLE ONLY "EP2".password_resets DROP CONSTRAINT password_resets_pkey;
       EP2            postgres    false    223            �           2606    17138 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     o   ALTER TABLE ONLY "EP2".personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 [   ALTER TABLE ONLY "EP2".personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       EP2            postgres    false    224            �           2606    17140 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     u   ALTER TABLE ONLY "EP2".personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 c   ALTER TABLE ONLY "EP2".personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       EP2            postgres    false    224            �           2606    17142    rooms rooms_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY "EP2".rooms
    ADD CONSTRAINT rooms_pkey PRIMARY KEY (id);
 9   ALTER TABLE ONLY "EP2".rooms DROP CONSTRAINT rooms_pkey;
       EP2            postgres    false    226            �           2606    17146    users users_email_unique 
   CONSTRAINT     S   ALTER TABLE ONLY "EP2".users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 A   ALTER TABLE ONLY "EP2".users DROP CONSTRAINT users_email_unique;
       EP2            postgres    false    228            �           2606    17148    users users_pkey 
   CONSTRAINT     M   ALTER TABLE ONLY "EP2".users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 9   ALTER TABLE ONLY "EP2".users DROP CONSTRAINT users_pkey;
       EP2            postgres    false    228            �           1259    17169 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON "EP2".personal_access_tokens USING btree (tokenable_type, tokenable_id);
 K   DROP INDEX "EP2".personal_access_tokens_tokenable_type_tokenable_id_index;
       EP2            postgres    false    224    224            5      x������ � �      7   ?   x�3�)�,KL��42@f����*�Z��61.#b�c�2&V��	61�=... ��+�      9   �   x�m�=�0���S�E�R��t�Xԙ$.���q�YJ�,Y���d��z?�.B8&�|pYfx��8x��A{��c1.��H��1��i\�~��.-�d$Z���:Cw��hL%�#������#�-F�} zY;�      ;   �   x�U�Q� �o9�a�`�]L6�]�*�0^_�)�����5M��?���.1=#�H���w���%l�����0R�ȩʘ%s$��r7���=�t�������P:��;On8�\�^E9�iC�!~�$�T���OIg�*'I�+z�SK��e���9�a�2ꍷؚ2"��V٨�^)�(sc      =      x������ � �      >      x������ � �      @   f   x���t-.9�0/%��385/93''�3��45)Q���Ј����X��D��T���������������died�M���I&�&��Y��	*����� k�7�      B      x������ � �     