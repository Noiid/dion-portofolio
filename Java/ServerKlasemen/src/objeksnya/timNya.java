/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package objeksnya;

/**
 *
 * @author Rido
 */
public class timNya {
    private String namaTim, lawanSebelum;
    private int idTim, play, win, draw, lose, cetakGoal, kebobolan, defisit, points;

    public timNya() {
    }

    public timNya(String namaTim, String lawanSebelum, int idTim, int play, int win, int draw, int lose, int cetakGoal, int kebobolan, int defisit, int points) {
        this.namaTim = namaTim;
        this.lawanSebelum = lawanSebelum;
        this.idTim = idTim;
        this.play = play;
        this.win = win;
        this.draw = draw;
        this.lose = lose;
        this.cetakGoal = cetakGoal;
        this.kebobolan = kebobolan;
        this.defisit = defisit;
        this.points = points;
    }

    public String getNamaTim() {
        return namaTim;
    }

    public void setNamaTim(String namaTim) {
        this.namaTim = namaTim;
    }

    public String getLawanSebelum() {
        return lawanSebelum;
    }

    public void setLawanSebelum(String lawanSebelum) {
        this.lawanSebelum = lawanSebelum;
    }

    public int getIdTim() {
        return idTim;
    }

    public void setIdTim(int idTim) {
        this.idTim = idTim;
    }

    public int getPlay() {
        return play;
    }

    public void setPlay(int play) {
        this.play = play;
    }

    public int getWin() {
        return win;
    }

    public void setWin(int win) {
        this.win = win;
    }

    public int getDraw() {
        return draw;
    }

    public void setDraw(int draw) {
        this.draw = draw;
    }

    public int getLose() {
        return lose;
    }

    public void setLose(int lose) {
        this.lose = lose;
    }

    public int getCetakGoal() {
        return cetakGoal;
    }

    public void setCetakGoal(int cetakGoal) {
        this.cetakGoal = cetakGoal;
    }

    public int getKebobolan() {
        return kebobolan;
    }

    public void setKebobolan(int kebobolan) {
        this.kebobolan = kebobolan;
    }

    public int getDefisit() {
        return defisit;
    }

    public void setDefisit(int defisit) {
        this.defisit = defisit;
    }

    public int getPoints() {
        return points;
    }

    public void setPoints(int points) {
        this.points = points;
    }
    
    
    
    
    
}
