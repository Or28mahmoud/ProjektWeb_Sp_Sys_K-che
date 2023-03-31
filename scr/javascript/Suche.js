const navbarAutocomplete = document.querySelector('#navbar-search-autocomplete');
const navbarData = ['Tabuleh', 'Kabseh', 'Qatayef', 'Hummus', 'Mahashi','Halawet Aljebn'];
const navbarDataFilter = (value) => {
  return navbarData.filter((item) => {
    return item.toLowerCase().startsWith(value.toLowerCase());
  });
};

function fun(){
    for(let i =0;i<navbarData.length;i++){
      console.log(navbarData[i]);
    }
    
}
fun();