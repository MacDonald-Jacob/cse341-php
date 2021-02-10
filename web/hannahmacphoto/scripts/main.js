// /*********************************************************************************
// * Code Block Summary:
// * In short, the function shown below requests the data, 
// * based on the packageID and catches any errors if they exist, 
// * and sends the retrieved data to the buildPackageList function below for 
// * building it into HTML and then displays it into the package management web page.
// **********************************************************************************/
// //follow all rules strictly
// 'use strict' 
 
//  // Get a list of packages based on the packageId 
//  let packageList = document.querySelector("#packageList"); 
//  packageList.addEventListener("change", function () {           
//      let classificationId = packageList.value;                    
//      console.log(`classificationId is: ${classificationId}`);            
//      let classIdURL = "/phpmotors/vehicles/index.php?action=getInventoryItems&classificationId=" + classificationId; 
//      fetch(classIdURL)                                                  
//      .then(function (response) {                                         
//              return response.json();                                     
//             } 
//             throw Error("Network response was not OK"); 
//         }) 
//         .then(function (data) {                                          
//             console.log(data);                                           
//         }) 
//         .catch(function (error) {                                        
//             console.log('There was a problem: ', error.message) 
//         }) 
//     })



// /*********************************************************************************
// * Code Block Summary:
// * function that will parse the JavaScript object and wrap it up into HTML, 
// * then inject it into the vehicle management view.
// **********************************************************************************/

// // Build inventory items into HTML table components and inject into DOM 
// function buildPackageList(data) { 
//     let inventoryDisplay = document.getElementById("inventoryDisplay");  //Reaches into the HTML document, uses the ID to capture the element and assigns it to a JavaScript variable for use later.
//     // Set up the table labels 
//     let dataTable = '<thead>'; 
//     dataTable += '<tr><th>Vehicle Name</th><td>&nbsp;</td><td>&nbsp;</td></tr>'; 
//     dataTable += '</thead>'; 
//     // Set up the table body 
//     dataTable += '<tbody>'; 
//     // Iterate over all vehicles in the array and put each in a row 
//     data.forEach(function (element) { 
//         console.log(element.invId + ", " + element.invModel); 
//         dataTable += `<tr><td>${element.invMake} ${element.invModel}</td>`; 
//         dataTable += `<td><a href='/phpmotors/vehicles?action=mod&id=${element.invId}' title='Click to modify'>Modify</a></td>`; 
//         dataTable += `<td><a href='/phpmotors/vehicles?action=del&id=${element.invId}' title='Click to delete'>Delete</a></td></tr>`; 
//     }) 
//     dataTable += '</tbody>'; 
//     // Display the contents in the Vehicle Management view 
//     inventoryDisplay.innerHTML = dataTable; 
//     }