#  GUIA para operar con PDO

	1.- Conectar				new PDO()
	2.- SQL						$sql = "";
	3.- preparar statement		prepare($sql)
	4.- ejecutar statement		execute()
	[ 5.- traer datos			fetch() || fetchAll() ]


## ejemplo

	$link = new PDO(----);
	$sql = "SELECT ---- ";
	$stmt = $link->prepare($sql);
	$stmt = execute();

	$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

