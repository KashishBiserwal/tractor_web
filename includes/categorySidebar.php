<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

<style>
    .menu-button {
        width: 100%;
        background: none;
        color: black;
        padding: 10px;
        padding-left: 50px;
        border: 0.5px solid #D9D9D9;
        text-align: left;
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* border-radius: 5px; */
        cursor: pointer;
    }
    .menu-button:hover {
        background-color: #B90405;
    }
    .menu-button a {
        color: black;
        text-decoration: none;
        display: block;
        padding: 5px;
    }
    .menu-button a:hover {
        color: white !important;
    }
    .active {
        background-color: #B90405;
    }
    .active a {
        color: white !important;
    }
</style>

<aside style="width: 300px;  position: fixed; top: 80px; left: 0;  padding-top: 100px; overflow-y: auto;">


    <div style="display: flex; flex-direction: column; border: 1px solid #D9D9D9; border-radius: 5px;">
       
        <button class="menu-button">
            <a href="newTractors.php" style="color: black; text-decoration: none; display: block; padding: 5px; ">New Tractor</a>
        </button> 
        <button class="menu-button">
            <a href="usedTractors.php" style="color: black; text-decoration: none; display: block; padding: 5px; ">Used Tractor</a>
        </button> 
        <button class="menu-button">
            <a href="farmImplements.php?id=6" style="color: black; text-decoration: none; display: block; padding: 5px; ">Implements</a>
        </button> 
        <button class="menu-button">
            <a href="newTractors.php" style="color: black; text-decoration: none; display: block; padding: 5px; ">Nursery</a>
        </button> 
        <button class="menu-button">
            <a href="newTractors.php" style="color: black; text-decoration: none; display: block; padding: 5px; ">Tractor Mistri</a>
        </button> 
        <button class="menu-button">
            <a href="customer-insurance.php" style="color: black; text-decoration: none; display: block; padding: 5px; ">Insurance</a>
        </button> 
        
       

        <!-- <button style="width: 100%; background: none; color: black; font-weight: 800; padding: 10px; border: none; text-align: left; display: flex; align-items: center; justify-content: space-between; border-radius: 5px; cursor: pointer;" 
            onclick="toggleMenu('about-lookup')">
            <span> Lookup Listing</span>
            <i class="fa-solid fa-angle-down"></i>
        </button>
        <div id="about-lookup" style="display: none; padding-left: 15px;">
            <ul style="list-style: none; padding: 5px 0; margin: 0;">
                <li style="padding: 5px 0;"><a href="lookupvalue.php" style="color: black; text-decoration: none; display: block; padding: 5px; border-radius: 3px;">Lookup Types</a></li>
                <li style="padding: 5px 0;"><a href="lookupdata.php" style="color: black; text-decoration: none; display: block; padding: 5px; border-radius: 3px;">Lookup Data</a></li>
            </ul>
        </div> -->
    </div>
</aside>

<script>
function toggleMenu(id) {
    var element = document.getElementById(id);
    element.style.display = (element.style.display === "none" || element.style.display === "") ? "block" : "none";
}
</script>
