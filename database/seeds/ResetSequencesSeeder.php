<?php

use Illuminate\Database\Seeder;

class ResetSequencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::raw("--drop function IF EXISTS reset_sequence (text,text) RESTRICT;
CREATE OR REPLACE FUNCTION \"reset_sequence\" (tablename text,columnname text) RETURNS bigint --\"pg_catalog\".\"void\"
AS
$body$
DECLARE seqname character varying;
        c integer;
BEGIN
    select tablename || '_' || columnname || '_seq' into seqname;
    EXECUTE 'SELECT max(\"' || columnname || '\") FROM \"' || tablename || '\"' into c;
    if c is null then c = 0; end if;
    c = c+1; --because of substitution of setval with \"alter sequence\"
    --EXECUTE 'SELECT setval( \"' || seqname || '\", ' || cast(c as character varying) || ', false)'; DOES NOT WORK!!!
    EXECUTE 'alter sequence ' || seqname ||' restart with ' || cast(c as character varying);
    RETURN nextval(seqname)-1;
END;
$body$ LANGUAGE 'plpgsql';

select sequence_name, PG_CLASS.relname, PG_ATTRIBUTE.attname,
    reset_sequence(PG_CLASS.relname,PG_ATTRIBUTE.attname)
from PG_CLASS
    join PG_ATTRIBUTE on PG_ATTRIBUTE.attrelid = PG_CLASS.oid
    join information_schema.sequences
        on information_schema.sequences.sequence_name = PG_CLASS.relname || '_' || PG_ATTRIBUTE.attname || '_seq'
where sequence_schema='public';
        ");
    }
}
