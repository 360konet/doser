@include('doctor.app.layout')
<style>
    .card {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 1000px;
    width: 100%;
}

form {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

input[type="text"] {
    flex: 1;
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px 20px;
    margin: 5px;
    border: none;
    background-color: #28a745;
    color: #fff;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #218838;
}
</style>
	
	<main class="content-wrap">
		<header class="content-head">
			<h1>Patient Panel</h1>
		</header>
		
		<div class="content">
        <div class="card" style="background-color:#7FFFD4">
        <form>
            <input type="text" placeholder="Enter Patient ID">
            <input type="text" placeholder="Enter Patient Name">
            <input type="text" placeholder="Enter Patient Contact">
            <input type="text" placeholder="Enter Patient Address">
            <button type="submit">Add Patient</button>
        </form>
    </div>
            
		</div>
	</main>
</div>