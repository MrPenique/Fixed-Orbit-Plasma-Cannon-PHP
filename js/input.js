    function Check(that) {
        switch(that.value) {
            case "icmp":
                sinputs("inline", "none", "inline", "none", "none", "none");
                break;
            case "ntpattack":
                sinputs("inline", "none", "inline", "inline", "none", "none");
                break;
            case "ssdpattack":
                sinputs("inline", "none", "inline", "inline", "none", "none");
                break;
            case "udp":
                sinputs("inline", "none", "inline", "inline", "inline", "none");
                break;
            case "tcp":
                sinputs("inline", "none", "inline", "inline", "inline", "none");
                break;
            case "post":
                sinputs("inline", "none", "inline", "none", "none", "none");
                break;
            case "get":
                sinputs("inline", "none", "inline", "none", "none", "none");
                break;
            case "ssl":
                sinputs("inline", "none", "inline", "none", "none", "none");
                break;
            case "404":
                sinputs("inline", "none", "inline", "none", "none", "none");
                break;
            case "slowloris":
                sinputs("inline", "none", "inline", "inline", "inline", "inline");
                break;
            case "arme":
                sinputs("inline", "none", "inline", "inline", "inline", "inline");
                break;
            case "hulk":
                sinputs("inline", "none", "inline", "inline", "inline", "inline");
                break;
            case "toxicssl":
                sinputs("inline", "none", "inline", "inline", "inline", "inline");
                break;
            case "rudy":
                sinputs("inline", "none", "inline", "inline", "none", "inline");
                break;
            case "minecraftbandwitdh":
                sinputs("inline", "none", "inline", "inline", "none", "none");
            default:
        } 
    }
    function sinputs(sinput1, sinput1_2, sinput2, sinput3, sinput5, sinput6){
            document.getElementById("sinput1").style.display = sinput1;//Target ip
            document.getElementById("sinput1_2").style.display = sinput1_2;//source ip
            document.getElementById("sinput2").style.display = sinput2;//Time
            document.getElementById("sinput3").style.display = sinput3;//port
            document.getElementById("sinput5").style.display = sinput5;//timeout
            document.getElementById("sinput6").style.display = sinput6;//socket
    }
    function Checkport(that) {
        switch(that.value) {
            case "fscn":
                portinputs("none", "none", "none");
                break;
            case "rgscan":
                portinputs("inline", "inline", "none");
                break;
            case "onebyonescan":
                portinputs("none", "none", "inline");
                break;
        } 
    }
    function portinputs(sinput1, sinput2, sinput3){
            document.getElementById("minport").style.display = sinput1;
            document.getElementById("maxport").style.display = sinput2;
            document.getElementById("textarea").style.display = sinput3;
    }