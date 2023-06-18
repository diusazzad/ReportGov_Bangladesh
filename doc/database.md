Divisions Table:

Represents different divisions in a geographical region.
Contains columns: id, name, created_at, updated_at.
Primary key: id.
Districts Table:

Represents districts within each division.
Contains columns: id, division_id, name, created_at, updated_at.
Primary key: id.
Foreign key: division_id references the id column in the divisions table.
Upazilas Table:

Represents upazilas (sub-districts) within each district.
Contains columns: id, district_id, name, created_at, updated_at.
Primary key: id.
Foreign key: district_id references the id column in the districts table.
Unions Table:

Represents unions within each upazila.
Contains columns: id, upazila_id, name, created_at, updated_at.
Primary key: id.
Foreign key: upazila_id references the id column in the upazilas table.
Thanas (Police Stations) Table:

Represents police stations within each union.
Contains columns: id, union_id, name, created_at, updated_at.
Primary key: id.
Foreign key: union_id references the id column in the unions table.
Reports Table:

Represents reports made by users about employees.
Contains columns: id, user_id, employee_id, report_message, created_at, updated_at.
Primary key: id.
Foreign keys: user_id references the id column in the users table, employee_id references the id column in the employees table.
Additional column: report_message to store details about the report.



https://i.stack.imgur.com/98wSu.png
