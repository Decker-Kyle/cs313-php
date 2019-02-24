CREATE TABLE note (
  id SERIAL PRIMARY KEY NOT NULL,
  title VARCHAR(80) NOT NULL,
  firstTime VARCHAR(80),
  SecondTime VARCHAR(80),
  timePeriod VARCHAR(80),
  content VARCHAR(4000) NOT NULL
  );