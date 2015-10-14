-- Table: album

-- DROP TABLE album;

CREATE TABLE album
(
  id bigserial NOT NULL,
  artist character varying(255),
  title character varying(255),
  CONSTRAINT pk_album PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE album
  OWNER TO postgres;


-- Table: track

-- DROP TABLE track;

CREATE TABLE track
(
  track_id bigserial NOT NULL,
  track_title character varying(255),
  album_id bigint,
  CONSTRAINT track_pkey PRIMARY KEY (track_id),
  CONSTRAINT fk_track_album FOREIGN KEY (album_id)
      REFERENCES album (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE CASCADE
)
WITH (
  OIDS=FALSE
);
ALTER TABLE track
  OWNER TO postgres;

