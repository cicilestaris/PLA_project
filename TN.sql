create database TN;
	use TN;

create table NMS(
	id_nms integer primary key auto_increment,
	nama_nms varchar(50)
);

create table Lokasi(
	id_lokasi integer primary key auto_increment,
	nama_lokasi varchar(50)
);

create table Merk(
	id_merk integer primary key auto_increment,
	nama_merk varchar(50)
);

create table Board(
	id_board integer primary key auto_increment,
	nama_board varchar(50),
	port integer
);

create table Slot(
	id_slot integer primary key auto_increment,
	nomor_slot integer,
	id_board integer,
	foreign key (id_board) references Board(id_board)
);

create table Shelf(
	id_shelf integer primary key auto_increment,
	nomor_shelf integer,
	id_slot integer,
	foreign key (id_slot) references Slot(id_slot)
);

create table Rack(
	id_rack integer primary key auto_increment,
	nomor_rack integer,
	id_shelf integer,
	foreign key (id_shelf) references Shelf(id_shelf)
);

create table NE(
	id_ne integer primary key auto_increment,
	nama_ne varchar(50),
	id_rack integer,
	foreign key (id_rack) references Rack(id_rack)
);

create table Node(
	id_node integer primary key auto_increment,
	nama_node varchar(50),
	id_ne integer,
	id_nms integer,
	id_lokasi integer,
	id_merk integer,
	foreign key (id_ne) references NE(id_ne),
	foreign key (id_nms) references NMS(id_nms),
	foreign key (id_lokasi) references Lokasi(id_lokasi),
	foreign key (id_merk) references Merk(id_merk)
);
