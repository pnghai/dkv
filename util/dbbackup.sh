#!/usr/bin/env bash
pg_dump dkvdb > dkvdb.dump -U homestead -W secret -h localhost -p 5432 --clean