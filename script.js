//QUANTITE ENGAGEE
async function getEng() {
  const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
  const data = await response.json();
   document.querySelector("#QENG").innerHTML = "<h1>" + data.qengaged + "</h1>";
}
getEng()

async function getEng1() {
  const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
  const data = await response.json();
   document.querySelector("#QENG1").innerHTML = "<h1>" + data.qengaged1 + "</h1>";
}
getEng1()

async function getEng3() {
  const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
  const data = await response.json();
   document.querySelector("#QENG3").innerHTML = "<h1>" + data.qengaged3 + "</h1>";
}
getEng3()

//QUANTITE ENCOURS
async function getEnc() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QENC").innerHTML = "<h1>" + data.qencours + "</h1>";
  }
  getEnc()

  async function getEnc1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QENC1").innerHTML = "<h1>" + data.qencours1 + "</h1>";
  }
  getEnc1()

  async function getEnc3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QENC3").innerHTML = "<h1>" + data.qencours3 + "</h1>";
  }
  getEnc3()
  
  //QUANTITE FABRIQUEE
  async function getFab() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QFAB").innerHTML = "<h1>" + data.qfab + "</h1>";
  }
  getFab()

  async function getFab1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QFAB1").innerHTML = "<h1>" + data.qfab1 + "</h1>";
  }
  getFab1()

  async function getFab3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#QFAB3").innerHTML = "<h1>" + data.qfab3 + "</h1>";
  }
  getFab3()

  //CONTROLE QUALITE
  async function getCq() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Qual").innerHTML = "<h1>" + data.cq + "</h1>";
  }
  getCq()

  async function getCq1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Qual1").innerHTML = "<h1>" + data.cq1 + "</h1>";
  }
  getCq1()

  async function getCq3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Qual3").innerHTML = "<h1>" + data.cq3 + "</h1>";
  }
  getCq3()

  //PERFORMANCE
  async function getPerf() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Perf").innerHTML = "<h1>" + data.performance + "</h1>";
  }
  getPerf()

  async function getPerf1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Perf1").innerHTML = "<h1>" + data.perf1 + "</h1>";
  }
  getPerf1()

  async function getPerf3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#Perf3").innerHTML = "<h1>" + data.perf3 + "</h1>";
  }
  getPerf3()

  //PRESENCE
  async function getPresence() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#presence").innerHTML = "<h1>" + data.presence + "</h1>";
  }
  getPresence()

  async function getPresence1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#presence1").innerHTML = "<h1>" + data.presence1 + "</h1>";
  }
  getPresence1()

  async function getPresence3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    document.querySelector("#presence3").innerHTML = "<h1>" + data.presence3 + "</h1>";
  }
  getPresence3()

  //objectif
  async function getObjectif() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    console.log (data.Objectif);
    document.querySelector("#obj").innerHTML = "<h1>" + data.obj + "</h1>";
  }
  getObjectif()

  async function getObjectif1() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    console.log (data.Objectif);
    document.querySelector("#obj1").innerHTML = "<h1>" + data.obj1 + "</h1>";
  }
  getObjectif1()

  async function getObjectif3() {
    const response = await fetch("http://192.168.201.19/digitex_isa/dashbord_bmethode/PlatformeDigiTex/");
    const data = await response.json();
    console.log (data.Objectif);
    document.querySelector("#obj3").innerHTML = "<h1>" + data.obj3 + "</h1>";
  }
  getObjectif3()