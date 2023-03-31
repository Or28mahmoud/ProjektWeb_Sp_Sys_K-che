const navbarAutocomplete = document.querySelector("#Such_ID");
const navbarData = ['Tabuleh', 'Kabseh', 'Qatayef', 'Hummus', 'Mahashi','Halawet Aljebn'];
const navadess =['..scr/Rezepten/Rezept1.html','../Rezepten/Rezept2.html','../Rezepten/Rezept3.html','../Rezepten/Rezept4.html','../Rezepten/Rezept5.html',"../Rezepten/Rezept6.html"];



function suchfunktion(){
  let navbar ;
   for(let i =0 ;navbarData.length;i++){
if(navbarData[i] == navbarAutocomplete){
        navbar=navbarData[i];
        window.open(navadess[i]);

}else{
      Window.write("Falsche Eingabe")
  } }

}
let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
  }