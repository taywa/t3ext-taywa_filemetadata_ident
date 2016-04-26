======================================
Add ident field to sys_file_metadata
======================================

Usage of ident field
========================

In DAM in TYPO3 4.5 there was a ident field for media. This field is identifier for a object or media in real live.

https://en.wikipedia.org/wiki/Identifier


Migrate tx_dam.ident to sys_file_metadata.ident
================================================

This only works, if you used the extension "dam_falmigration" for migration and the tx_dam is still present

sql::

    UPDATE sys_file_metadata,sys_file,tx_dam SET sys_file_metadata.ident=tx_dam.ident  WHERE sys_file._migrateddamuid=tx_dam.uid AND sys_file_metadata.file=sys_file.uid


Tools
================================================

zip this extension:

    zip -r ../taywa_filemetadata_ident_0.0.11.zip *
