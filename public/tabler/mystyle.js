var currentTab = 0;
              document.addEventListener("DOMContentLoaded", function(event) {


              showTab(currentTab);

              });

              function showTab(n) {
              var x = document.getElementsByClassName("tab");
              x[n].style.display = "block";
              if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              } else {
              document.getElementById("prevBtn").style.display = "inline";
              }
              if (n == (x.length - 1)) {
              document.getElementById("nextBtn").innerHTML = 'Prev';
              } else {
              document.getElementById("nextBtn").innerHTML = 'Next';
              }
              fixStepIndicator(n)
              }

              function nextPrev(n) {
              var x = document.getElementsByClassName("tab");
              if (n == 1 && !validateForm()) return false;
              if (n == 1 && !validateForm2()) return false;
              x[currentTab].style.display = "none";
              currentTab = currentTab + n;
              if (currentTab >= x.length) {
            
              document.getElementById("nextprevious").style.display = "none";
              document.getElementById("all-steps").style.display = "none";
              document.getElementById("register").style.display = "none";
              document.getElementById("pgraph").style.display = "none";
            //   document.getElementById("register").style.display = "block";
              document.getElementById("text-message").style.display = "block";




              }
              showTab(currentTab);
              }

              function validateForm() {
                   var x, y, i, valid = true;
                   x = document.getElementsByClassName("tab");
                   y = x[currentTab].getElementsByTagName("input");
                   for (i = 0; i < y.length; i++) {
                       if (y[i].value == "") {
                           y[i].className += " invalid";
                           valid = false;
                       }


                   }
                   if (valid) {
                       document.getElementsByClassName("step")[currentTab].className += " finish";
                   }
                   return valid;
               }

               function validateForm2() {
                var x, y, i, valid = true;
                x = document.getElementsByClassName("tab");
                y = x[currentTab].getElementsByTagName("select");
                for (i = 0; i < y.length; i++) {
                    if (y[i].value == "") {
                        y[i].className += " invalid";
                        valid = false;
                    }


                }
                if (valid) {
                    document.getElementsByClassName("step")[currentTab].className += " finish";
                }
                return valid;
            }

               function fixStepIndicator(n) {
                   var i, x = document.getElementsByClassName("step");
                   for (i = 0; i < x.length; i++) {
                       x[i].className = x[i].className.replace(" active", "");
                   }
                   x[n].className += " active";
               }

            
// this is for the selects of the region
var stateObject = {

    "Kilimanjaro": { 
            "Same": ["new Delhi", "North Delhi"],
            "Mwanga": ["Thiruvananthapuram", "Palakkad"],
            "Moshi Rural": ["North Goa", "South Goa"],
            "Moshi Urban": ["North Goa", "South Goa"],
            "Moshi Urban": ["North Goa", "South Goa"],
            "Hai": ["North Goa", "South Goa"],
            "Rombo": ["North Goa", "South Goa"],
        },

    "Dar es salaam": {
            "Kinondoni": ["Dunstan", "Mitchell"],
            "Ubungo": ["Altona", "Euroa"],
            "Ilala": ["Altona", "Euroa"],
            "Temeke": ["Altona", "Euroa"],
            "Kigamboni": ["Altona", "Euroa"],
        }, 
    
    "Arusha": {
            "Karatu": ["Acadia", "Bighorn"],
            "Karatu": ["Acadia", "Bighorn"],
            "Longido": ["Acadia", "Bighorn"],
            "Meru": ["Washington", ""],
            "Meru": ["Washington", ""],
            "Ngorongoro": ["Washington", ""],
        },

}

window.onload = function () {
    var countySel = document.getElementById("region"),
        stateSel = document.getElementById("district"),
        districtSel = document.getElementById("districtSel");

        for (var country in stateObject) {
            countySel.options[countySel.options.length] = new Option(country, country);
        }

        countySel.onchange = function () {
            stateSel.length = 1; // remove all options bar first
            districtSel.length = 1; // remove all options bar first

            if (this.selectedIndex < 1) return; // done

            for (var state in stateObject[this.value]) {

                stateSel.options[stateSel.options.length] = new Option(state, state);

            }

        }

        countySel.onchange(); // reset in case page is reloaded

        stateSel.onchange = function () {

            districtSel.length = 1; // remove all options bar first

            if (this.selectedIndex < 1) return; // done

            var district = stateObject[countySel.value][this.value];

            for (var i = 0; i < district.length; i++) {

                districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);

            }

        }

}