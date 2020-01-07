/*
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
public class LinkedListSewa {
    NodeSewa head;
    int size;
    MobilSewa mbl;
    public LinkedListSewa(){
        head=null;
        size=0;
    }
    public boolean isEmpty(){
        return head == null;
    }
    public void addFirst(MobilSewa item){
        head = new NodeSewa(item, null);
        size++;
    }
    public void add(MobilSewa item, int index) throws Exception{
        if (index < 0 || index > size) {
            throw new Exception("Nilai index di luar batas");
        }
        if (isEmpty() || index == 0) {
            addFirst(item);
        }else{
            NodeSewa tmp = head;
            for (int i = 1; i < index; i++) {
                tmp = tmp.next;
            }
            NodeSewa next = (tmp==null)? null: tmp.next;
            tmp.next = new NodeSewa(item,next);
            size++;
        }
    }
    public void addLast(MobilSewa item){
        if (isEmpty()) {
            addFirst(item);
        }else{
            NodeSewa tmp = head;
            while (tmp.next != null) {                
                tmp = tmp.next;
            }
            tmp.next = new NodeSewa(item,null);
            size++;
        }
    }
    public MobilSewa getFirst() throws Exception{
        if (isEmpty()) {
            throw new Exception("LinkedList kosong");
        }
        return head.data;
    }
    public MobilSewa getLast() throws Exception{
        if (isEmpty()) 
        {
            throw new Exception("LinkedList kosong");
        }
        NodeSewa tmp = head;
        while (tmp.next != null) {            
            tmp = tmp.next;
        }
        return tmp.data;
    }
    public MobilSewa get(int index) throws Exception{
        if (isEmpty() || index >=size) {
            throw new Exception("Nilai index di luar batas");
        }
        NodeSewa tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        return tmp.data;
    }
    public int getStatusMobil (String item) throws Exception{
        int index = getKey(item);
        int status =0;
        if (index==-1) {
            throw new Exception("Data tidak tersedia");
            
        }
        NodeSewa tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        if (tmp.data.mbl.available.equalsIgnoreCase("available")) {
            status = 1;
        }
        return status;
    }
    public void changeAtrib (String item, String available) throws Exception{
        int index = getKey(item);
        NodeSewa tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        tmp.data.mbl.available = available;
    }
    public void changeAtribBack (String item, int harga) throws Exception{
        int index = getKey(item);
        NodeSewa tmp = head;
        for (int i = 0; i < index; i++) {
            tmp = tmp.next;
        }
        tmp.data.totalHarga = harga;
    }
    public int getKey (String item) throws Exception{
        NodeSewa tmp = head;
        int simpan=-1;
        for (int i = 0; i < size; i++) {
            
            if (tmp.data.kdSewa.equalsIgnoreCase(item)) {
                simpan=i;
                break;
            }
            tmp=tmp.next;
        }
        return simpan;
    }
    public void removeKey (String item) throws Exception{
        NodeSewa tmp = head;
        for (int i = 0; i < size; i++) {
            
            if (tmp.data.kdSewa.equalsIgnoreCase(item)) {
                remove(i);
                break;
            }
            tmp=tmp.next;
        }
    }
    public void remove(int index) throws Exception{
        if (isEmpty() || index >=size) {
            throw new Exception("Nilai index di luar batas");
        }
        if (isEmpty() || index == 0) {
            removeFirst();
        }else{
            NodeSewa prev = head;
            NodeSewa cur = head.next;
            for (int i = 1; i < index; i++) {
                prev = cur;
                cur = prev.next;
            }
            prev.next = cur.next;
            size--;
        }
    }
    public void removeFirst() throws Exception{
        MobilSewa tmp = getFirst();
        head = head.next;
        size--;
    }
    public void clear(){
        head= null;
        size=0;
    }
    public void print(){
        if (!isEmpty()) {
            NodeSewa tmp = head;
            int urut =1;
            while (tmp != null) {
                System.out.print(urut+". ");
                tmp.data.print();
                System.out.println("___________________________________________");
                System.out.println("___________________________________________");
                tmp = tmp.next;
                urut++;
            }
        }else{
            System.out.println("Data Penyewaan kosong");
        }
    }
}
