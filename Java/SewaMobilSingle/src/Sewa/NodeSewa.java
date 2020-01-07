/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Sewa;

/**
 *
 * @author SPLASH
 */
public class NodeSewa {
    MobilSewa data;
    NodeSewa next;

    public NodeSewa(MobilSewa data, NodeSewa next) {
        this.data = data;
        this.next = next;
    }
}
