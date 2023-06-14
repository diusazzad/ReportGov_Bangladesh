Division:

No specific relationships defined.
District:

No specific relationships defined.
Upazila:

Belongs to a District: $this->belongsTo(District::class)
Belongs to a Division through District: $this->belongsToThrough(Division::class, District::class)
Thana:

Belongs to an Upazila: $this->belongsTo(Upazila::class)
Union:

Belongs to a Thana: $this->belongsTo(Thana::class)
